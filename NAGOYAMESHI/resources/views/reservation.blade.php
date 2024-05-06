
@extends('layouts.app')
 
 @section('content')
 <div class="container  d-flex justify-content-center mt-3">
     <div class="w-75">
         <h1>予約一覧</h1>
         <div class="row">
             @foreach ($reservations as $reservation)
               <div class="col-md-7 mt-2">
                <p class="h5">店舗名：{{$reservation->shop_id}}</p>
                 <p class="h5">予約日：{{$reservation->date}}</p>
                 <p class="h5">時間：{{$reservation->time}}</p>
                 <p class="h5">人数：{{$reservation->people}}</p>
               </div>
             @endforeach
         </div>
     </div>
 </div>
 @endsection
