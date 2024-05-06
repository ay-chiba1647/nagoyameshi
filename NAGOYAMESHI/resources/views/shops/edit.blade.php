@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <h1>店舗情報更新</h1>
 
     <form action="{{ route('shops.update',$shop->id) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="form-group">
             <label for="shop-name">店舗名</label>
             <input type="text" name="name" id="shop-name" class="form-control" value="{{ $shop->name }}">
         </div>
         <div class="form-group">
             <label for="shop-description">店舗説明</label>
             <textarea name="description" id="shop-description" class="form-control">{{ $shop->description }}</textarea>
         </div>
         <div class="form-group">
             <label for="price_under">最小価格</label>
             <input type="number" name="price_under" id="price-under" class="form-control" value="{{ $shop->price_under }}">
         </div>
         <div class="form-group">
             <label for="price_over">最大価格</label>
             <input type="number" name="price_over" id="price-over" class="form-control" value="{{ $shop->price_over }}">
         </div>
         <div class="form-group">
             <label for="shop-category">カテゴリ</label>
             <select name="category_id" class="form-control" id="shop-category">
                 @foreach ($categories as $category)
                 @if ($category->id == $shop->category_id)
                     <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                 @else
                     <option value="{{ $category->id }}">{{ $category->name}}</option>
                 @endif
                 @endforeach
             </select>
         </div>
         <div class="form-group">
             <label for="open-hour">開店時間</label>
             <input type="number" name="open_our" id="open-hour" class="form-control" value="{{ $shop->open_our }}">
         </div>
         <div class="form-group">
             <label for="close-hour">閉店時間</label>
             <input type="number" name="close_our" id="close-hour" class="form-control" value="{{ $shop->close_our }}">
         </div>
         <div class="form-group">
             <label for="postal-code">郵便番号</label>
             <input type="text" name="postal_code" id="postal-code" class="form-control" value="{{ $shop->postal_code }}">
         </div>
         <div class="form-group">
             <label for="address">住所</label>
             <textarea name="address" id="address" class="form-control">{{ $shop->address }}</textarea>
         </div>
         <div class="form-group">
             <label for="phone">電話番号</label>
             <input type="text" name="phone" id="phone" class="form-control" value="{{ $shop->phone }}">
         </div>
         <div class="form-group">
             <label for="holiday">休業日</label>
             <input type="text" name="holiday" id="holiday" class="form-control" value="{{ $shop->holiday }}">
         </div>
         <button type="submit" class="btn btn-danger">更新</button>
     </form>

     <a href="{{ route('shops.index') }}">店舗一覧に戻る</a>
</div>
@endsection