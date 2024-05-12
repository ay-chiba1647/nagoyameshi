@extends('layouts.app')
 
 @section('content')
 
 <div class="d-flex justify-content-center">
     <div class="row w-75">
         <div class="col-5 offset-1">
             @if ($shop->image)
             <img src="{{ asset($shop->image) }}" class="w-100 img-fluid">
             @else
             <img src="{{ asset('img/nekocup.jpg')}}" class="w-100 img-fluid">
             @endif
         </div>
         <div class="col">
             <div class="d-flex flex-column">
                 <h1 class="">
                     {{$shop->name}}
                 </h1>
                 <p class="">
                     {{$shop->description}}
                 </p>
                 <hr>
                 <p class="d-flex align-items-end">
                     価格：￥{{$shop->price_under}}〜{{$shop->price_over}}円
                 </p>
                 <p class="d-flex align-items-end">
                     営業時間：{{$shop->open_our}}時〜{{$shop->close_our}}時
                 </p>
                 <p class="d-flex align-items-end">
                     郵便番号：{{$shop->postal_code}}<br>
                     住所：{{$shop->address}}<br>
                     電話番号：{{$shop->phone}}<br>
                 </p>
                 <p class="d-flex align-items-end">
                     休業日：{{$shop->holiday}}
                 </p>
                 <hr>
             </div>
             @auth
             <form method="POST" class="m-3 align-items-end">
                 @csrf
                 <input type="hidden" name="id" value="{{$shop->id}}">
                 <input type="hidden" name="name" value="{{$shop->name}}">
                 <input type="hidden" name="image" value="{{$shop->image}}">
                 <input type="hidden" name="price_under" value="{{$shop->price_under}}">
                 <input type="hidden" name="price_over" value="{{$shop->price_over}}">
                 <input type="hidden" name="open_our" value="{{$shop->open_our}}">
                 <input type="hidden" name="close_our" value="{{$shop->close_our}}">
                 <input type="hidden" name="postal_code" value="{{$shop->postal_code}}">
                 <input type="hidden" name="address" value="{{$shop->address}}">
                 <input type="hidden" name="phone" value="{{$shop->phone}}">
                 <input type="hidden" name="holiday" value="{{$shop->holiday}}">               
             </form>   
    @if($member == 1)  
      <div class="row w-75">
        <h2 class="float-left">予約</h2>
        <form method="POST" action="{{ route('reservations.store')}}">
        @csrf
          <div class="me-2 mb-2 date-select">
            <label>予約日</label>
            <select name="date" class="form-control form-select">
              <option value="{{date("m-d")}}">{{date('m月d日')}}</option>
              <option value="{{date("m-d",strtotime("1day"))}}">{{date('m月d日',strtotime("1day"))}}</option>
              <option value="{{date("m-d",strtotime("2day"))}}">{{date('m月d日',strtotime("2day"))}}</option>
              <option value="{{date("m-d",strtotime("3day"))}}">{{date('m月d日',strtotime("3day"))}}</option>
              <option value="{{date("m-d",strtotime("4day"))}}">{{date('m月d日',strtotime("4day"))}}</option>
              <option value="{{date("m-d",strtotime("5day"))}}">{{date('m月d日',strtotime("5day"))}}</option>
              <option value="{{date("m-d",strtotime("6day"))}}">{{date('m月d日',strtotime("6day"))}}</option>  
            </select>
            <label>時間</label>
            <select name="time" class="form-control form-select">
              <option value="16:00">16:00</option>
              <option value="17:00">17:00</option>
              <option value="18:00">18:00</option>
              <option value="19:00">19:00</option>
              <option value="20:00">20:00</option>
              <option value="21:00">21:00</option>  
            </select>
            <label>人数</label>
            <select name="people" class="form-control form-select">
              <option value="1名">1名</option>
              <option value="2名">2名</option>
              <option value="3名">3名</option>
              <option value="4名">4名</option>
              <option value="5名">5名</option>
              <option value="6名">6名</option>
              <option value="7名">7名</option> 
              <option value="8名">8名</option>
              <option value="9名">9名</option>
              <option value="10名">10名</option> 
            </select>
            <input type="hidden" name="shop_id" value="{{$shop->id}}">
            <input type="hidden" name="shop_name" value="{{$shop->name}}">
            <input type="hidden" name="image" value="{{$shop->image}}">            
            <div class="me-2 mb-2">
              <button type="submit" class="btn samuraimart-header-search-button"><i class="fa fa-calendar samuraimart-header-search-icon">予約する</i></button>
            </div>
          </div>
        </form>
      </div>                
                     <div class="col-5">
                             @if(Auth::user()->favorite_shops()->where('shop_id', $shop->id)->exists())
                                 <a href="{{ route('favorites.destroy', $shop->id) }}" class="btn nagoyameshi-favorite-button text-favorite w-100" onclick="event.preventDefault(); document.getElementById('favorites-destroy-form').submit();">
                                     <i class="fa fa-heart"></i>
                                     お気に入り解除
                                 </a>
                             @else
                                 <a href="{{ route('favorites.store', $shop->id) }}" class="btn nagoyameshi-favorite-button text-favorite w-100" onclick="event.preventDefault(); document.getElementById('favorites-store-form').submit();">
                                     <i class="fa fa-heart"></i>
                                     お気に入り
                                 </a>
                             @endif
                     </div>
                
             </form>
             <form id="favorites-destroy-form" action="{{ route('favorites.destroy', $shop->id) }}" method="POST" class="d-none">
                     @csrf
                     @method('DELETE')
                 </form>
                 <form id="favorites-store-form" action="{{ route('favorites.store', $shop->id) }}" method="POST" class="d-none">
                     @csrf
                 </form>
             @endauth
         </div>
 
         <div class="offset-1 col-11">
             <hr class="w-100">
             <h3 class="float-left">カスタマーレビュー</h3>
         </div>
 
         <div class="offset-1 col-10">
         <div class="row">
                 @foreach($reviews as $review)
                 <div class="offset-md-5 col-md-5">
                     <h3 class="review-score-color">{{ str_repeat('★', $review->score) }}</h3>
                     <p class="h3">{{$review->content}}</p>
                     <label>{{$review->created_at}}{{$review->user->name}}</label>
                 </div>
                 @endforeach
             </div><br>
 
             @auth
             <div class="row">
                 <div class="offset-md-5 col-md-5">
                     <form method="POST" action="{{ route('reviews.store') }}">
                         @csrf
                         <h4>評価</h4>
                             <select name="score" class="form-control m-2 review-score-color">
                                 <option value="5" class="review-score-color">★★★★★</option>
                                 <option value="4" class="review-score-color">★★★★</option>
                                 <option value="3" class="review-score-color">★★★</option>
                                 <option value="2" class="review-score-color">★★</option>
                                 <option value="1" class="review-score-color">★</option>
                             </select>
                         <h4>レビュー内容</h4>
                         @error('content')
                             <strong>レビュー内容を入力してください</strong>
                         @enderror
                         <textarea name="content" class="form-control m-2"></textarea>
                         <input type="hidden" name="shop_id" value="{{$shop->id}}">
                         <button type="submit" class="btn nagoyameshi-submit-button ml-2">レビューを追加</button>
                     </form>
                 </div>
             </div>
             @endauth
         </div>
     </div>
    @else
     <a class="nav-link" href="{{ route('paid_members.store') }}">
      <i class="fas fa-thumbs-up"></i><label>有料会員登録</label>
     </a>
   @endif
 </div>
 @endsection