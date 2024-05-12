@extends('layouts.app')
 
 @section('content')

<div class="slick list draggable">
  <img src="{{ asset('img/fuzi.jpg') }}" class="card-img" alt="...">
</div>
<br>

   <h1 class="text-center">店舗検索</h1>
   <div class="d-flex justify-content-center mb-4">
      <form action="{{ route('shops.index') }}" method="GET" class="serch-box mb-3">
         <input type="text" class="form-control samuraimart-header-search-input" name="keyword" placeholder="店名">
         <div class="mb-2">
           <button type="submit" class="btn samuraimart-header-search-button"><i class="fas fa-search samuraimart-header-search-icon"></i></button>
         </div>
      </form> 
   </div>

   <h2 class="text-center">カテゴリー検索</h2>
   <div class="row justify-content-center mb-4">
    <div class="col-12 col-md-8">
      @foreach ($major_categories as $major_category)
      <a class="btn btn-secondary mb-2" href="{{ route('shops.index', ['major_category' => $major_category->id])}}">{{ $major_category->name}}</a>
      @endforeach
    </div>
   </div>

   <br>

      <h1 class="text-center">おすすめ</h1>
      <div class="row">
        @foreach ($recommend_shops as $recommend_shop)
          <div class="col-4">
            <a href="{{ route('shops.show', $recommend_shop) }}">
              @if ($recommend_shop->image !== "")
               <img src="{{ asset($recommend_shop->image) }}" class="img-thumbnail">
              @else
               <img src="{{ asset('img/nekocup.jpg')}}" class="img-thumbnail">
              @endif
            </a>
            <div class="row">
              <div class="col-12">
                <p class="samuraimart-product-label mt-2">
                  {{ $recommend_shop->name }}<br>
                  <label>￥{{ $recommend_shop->price_under }}〜{{ $recommend_shop->price_over }}</label>
                </p>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <br>

      <h1 class="text-center">新着店舗</h1>
      <div class="row">
        @foreach ($recently_shops as $recently_shop)
          <div class="col-3">
           <a href="{{ route('shops.show', $recently_shop) }}">
             @if ($recently_shop->image !== "")
               <img src="{{ asset($recently_shop->image) }}" class="img-thumbnail">
             @else
               <img src="{{ asset('img/nekocup.jpg')}}" class="img-thumbnail">
             @endif
           </a>
           <div class="row">
             <div class="col-12">
               <p class="samuraimart-product-label mt-2">
                 {{ $recently_shop->name }}<br>
                 <label>￥{{ $recently_shop->price_under }}〜{{ $recently_shop->price_over }}</label>
               </p>
             </div>
           </div>
       </div>
      @endforeach
 @endsection
