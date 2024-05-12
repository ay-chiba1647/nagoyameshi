@extends('layouts.app')
 
 @section('content')
 <div class="row">
     <div class="col-9">
        <div class="container">
          @if ($major_category !== null)
          <a href = "{{ route('shops.index') }}">店舗一覧に戻る</a>
            <h1>{{ $major_category->name }}の店舗一覧{{$total_count}}件</h1>
          @elseif ($keyword !== null)
            <a href = "{{ route('shops.index') }}">店舗一覧に戻る</a>
            <h1>"{{ $keyword }}"の検索結果{{$total_count}}件</h1>
          @endif
        </div>
        <div>
          Sort By
          @sortablelink('price_under', '価格')
        </div>
         <div class="container mt-4">
             <div class="row w-100">
                 @foreach($shops as $shop)
                 <div class="col-3">
                     <a href="{{route('shops.show', $shop)}}">
                     @if ($shop->image !== "")
                         <img src="{{ asset($shop->image) }}" class="img-thumbnail">
                         @else
                         <img src="{{ asset('img/nekocup.jpg')}}" class="img-thumbnail">
                         @endif
                     </a>
                     <div class="row">
                         <div class="col-12">
                             <p class="nagoyameshi-shop-label mt-2">
                                 <h2> {{ $shop->name }}</h2><br>
                                 <label>￥{{ $shop->price_under }}〜{{ $shop->price_over }}円</label><br>
                             </p>
                         </div>
                     </div>
                 </div>
                 @endforeach
             </div>
         </div>
         {{ $shops->appends(request()->query())->links() }}
     </div>
 </div>
 @endsection