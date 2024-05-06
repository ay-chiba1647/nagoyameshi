@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <h1>新しい店舗を追加</h1>
 
     <form action="{{ route('shops.store') }}" method="POST">
         @csrf
         <div class="form-group">
             <label for="shop-name">店舗名</label>
             <input type="text" name="name" id="shop-name" class="form-control">
         </div>
         <div class="form-group">
             <label for="shop-description">店舗紹介</label>
             <textarea name="description" id="shop-description" class="form-control"></textarea>
         </div>
         <div class="form-group">
             <label for="price_under">最小価格</label>
             <input type="number" name="price_under" id="price-under" class="form-control">
         </div>
         <div class="form-group">
             <label for="price_over">最大価格</label>
             <input type="number" name="price_over" id="price-over" class="form-control">
         </div>
         <div class="form-group">
             <label for="shop-category">カテゴリ</label>
             <select name="category_id" class="form-control" id="shop-category">
                 @foreach ($categories as $category)
                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endforeach
             </select>
         </div>
         <div class="form-group">
             <label for="open-hour">開店時間</label>
             <input type="number" name="open_our" id="open-hour" class="form-control">
         </div>
         <div class="form-group">
             <label for="close-hour">閉店時間</label>
             <input type="number" name="close_our" id="close-hour" class="form-control">
         </div>
         <div class="form-group">
             <label for="postal-code">郵便番号</label>
             <input type="text" name="postal_code" id="postal-code" class="form-control">
         </div>
         <div class="form-group">
             <label for="address">住所</label>
             <textarea name="address" id="address" class="form-control"></textarea>
         </div>
         <div class="form-group">
             <label for="phone">電話番号</label>
             <input type="text" name="phone" id="phone" class="form-control">
         </div>
         <div class="form-group">
             <label for="holiday">休業日</label>
             <input type="text" name="holiday" id="holiday" class="form-control">
         </div>
         <button type="submit" class="btn btn-success">店舗を登録</button>
     </form>
 
     <a href="{{ route('shops.index') }}">店舗一覧に戻る</a>
 </div>
 @endsection