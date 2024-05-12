
@extends('layouts.app')
 
 @section('content')
 <div class="container  d-flex justify-content-center mt-3">
    <div class="w-75">
      <h1>予約一覧</h1>
      @foreach ($reservations as $reservation)
      <div class="card mb-3" style="max-width: 540px;">
       <div class="row g-0">
         <img src="{{ asset('img/fuzi.jpg') }}" class="img-fluid rounded-start">
       </div>
       <div class="col-md-8">
         <div class="card-body">
           <p class="h5">店舗名：{{$reservation->shop_name}}</p>
           <p class="h5">予約日：{{$reservation->date}}</p>
           <p class="h5">時間：{{$reservation->time}}</p>
           <p class="h5">人数：{{$reservation->people}}</p>
           <form method="POST" action="{{ route('reservations.destroy', $reservation) }}">
             @csrf
             @method('DELETE')
             <button class="bg-red-700 ml-2">
              予約取り消し
             </button>
           </form>
         </div>
       </div>
      </div>         
      @endforeach
    </div>
  </div>
 @endsection

