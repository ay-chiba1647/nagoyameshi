@extends('layouts.app')
 
 @section('content')
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
       <h1 class="mb-3">有料会員登録</h1>
       <form action="{{ route('paid_members.store') }}" method="POST">
         @csrf 
         <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
         <input type="hidden" name="continue_flag" value="{{1}}">
         <button class="bg-red-700 ml-2">
          登録する
         </button>
        </form>
     </div>
   </div>
 </div>
 @endsection
