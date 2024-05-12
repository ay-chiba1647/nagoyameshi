@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-5">
             <h3 class="mt-3 mb-3">新規会員登録</h3>
 
             <hr>
 
             <form method="POST" action="{{ route('register') }}">
                 @csrf
 
                 <div class="form-group row">
                     <label for="name" class="col-md-5 col-form-label text-md-left">氏名<span class="ml-1 samuraimart-require-input-label"><span class="samuraimart-require-input-label-text">必須</span></span></label>
 
                     <div class="col-md-7">
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror samuraimart-login-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="侍 太郎">
 
                         @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>氏名を入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <div class="form-group row">
                     <label for="email" class="col-md-5 col-form-label text-md-left">メールアドレス<span class="ml-1 samuraimart-require-input-label"><span class="samuraimart-require-input-label-text">必須</span></span></label>
 
                     <div class="col-md-7">
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror samuraimart-login-input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="samurai@samurai.com">
 
                         @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>メールアドレスを入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <div class="form-group row">
                     <label for="password" class="col-md-5 col-form-label text-md-left">パスワード<span class="ml-1 samuraimart-require-input-label"><span class="samuraimart-require-input-label-text">必須</span></span></label>
 
                     <div class="col-md-7">
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror samuraimart-login-input" name="password" required autocomplete="new-password">
 
                         @error('password')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br> 
                 <div class="form-group row">
                     <label for="password-confirm" class="col-md-5 col-form-label text-md-left">パスワード（確認用）<span class="ml-1 samuraimart-require-input-label"><span class="samuraimart-require-input-label-text">必須</span></label>
 
                     <div class="col-md-7">
                         <input id="password-confirm" type="password" class="form-control samuraimart-login-input" name="password_confirmation" required autocomplete="new-password">
                     </div>
                 </div>


                 <br>
                 <div class="form-group row">
                     <label for="phone" class="col-md-5 col-form-label text-md-left">電話番号<span class="ml-1 samuraimart-require-input-label"><span class="samuraimart-require-input-label-text">必須</span></span></label>
 
                     <div class="col-md-7">
                         <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror samuraimart-login-input" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="XXX-XXXX-XXXX">
 
                         @error('phone')
                         <span class="invalid-feedback" role="alert">
                             <strong>電話番号を入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
                 <div class="form-group row">
                     <label for="occupation" class="col-md-5 col-form-label text-md-left">職業<span class="ml-1 samuraimart-require-input-label"><span class="samuraimart-require-input-label-text">必須</span></span></label>
 
                     <div class="col-md-7">
                         <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror samuraimart-login-input" name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" autofocus placeholder="会社員">
 
                         @error('occupation')
                         <span class="invalid-feedback" role="alert">
                             <strong>職業を入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
                 <div class="form-group row">
                     <label for="allergy" class="col-md-5 col-form-label text-md-left">アレルギー<span class="ml-1 samuraimart-require-input-label"><span class="samuraimart-require-input-label-text">必須</span></span></label>
 
                     <div class="col-md-7">
                         <input id="allergy" type="text" class="form-control @error('allergy') is-invalid @enderror samuraimart-login-input" name="allergy" value="{{ old('allergy') }}" required autocomplete="allergy" autofocus placeholder="例：たまご">
 
                         @error('allergy')
                         <span class="invalid-feedback" role="alert">
                             <strong>アレルギーを入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <div class="form-group">
                     <button type="submit" class="btn samuraimart-submit-button w-100">
                         アカウント作成
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </div>
 @endsection
