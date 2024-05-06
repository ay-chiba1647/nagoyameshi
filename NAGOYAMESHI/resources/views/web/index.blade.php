@extends('layouts.app')
 
 @section('content')

 <div class="container">
 <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/top1.jpg')}}" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/top2.jpg')}}" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/top3.jpg')}}" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>

   <h1 class="mb-3">店舗検索</h1>
    <form action="{{ route('shops.index') }}" method="GET" class="serch-box mb-2">
     <div class="d-flex">
       <div class="me-2 mb-2">
         <input type="text" class="form-control samuraimart-header-search-input" name="keyword" placeholder="店名">
       </div>
       <div class="me-2 mb-2 category-select">
         <select name="category_id" class="form-control" id="shop-category">
           @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
           @endforeach
         </select>
       </div>
        <div class="me-2 mb-2">
          <button type="submit" class="btn samuraimart-header-search-button"><i class="fas fa-search samuraimart-header-search-icon"></i></button>
        </div>
     </div>
    </form> 

    <h1 class="mb-3">おすすめ</h1>
    <div class="card-group">
     <div class="card">
     <img src="{{ asset('img/tai.jpg')}}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">BISTRO NAGOYA</h5>
      <p class="card-text">営業時間 16:00~24:00</p>
      <p class="card-test">定休日　毎週水曜日</p>
      <p class="card-test">¥3000~10000</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">評価：★4.5</small>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('img/cake.jpg')}}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">CAKE FACTORY</h5>
      <p class="card-text">営業時間 10:00~21:00</p>
      <p class="card-test">定休日　毎週月曜日</p>
      <p class="card-test">¥1500~3000</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">評価：★2.9</small>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('img/nagoyatei.jpg')}}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">名古屋亭</h5>
      <p class="card-text">営業時間 12:00~23:00</p>
      <p class="card-test">定休日　毎週火曜日</p>
      <p class="card-test">¥15000~30000</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">評価：★4.2</small>
    </div>
  </div>
</div>
 </div>
 @endsection
