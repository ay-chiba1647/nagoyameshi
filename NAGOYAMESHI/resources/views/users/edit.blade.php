@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-5">
             <span>
                 <a href="{{ route('mypage') }}">マイページ</a> > 会員情報の編集
             </span>
 
             <h1 class="mt-3 mb-3">会員情報の編集</h1>
             <hr>
 
             <form method="POST" action="{{ route('mypage') }}">
                 @csrf
                 <input type="hidden" name="_method" value="PUT">
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="name" class="text-md-left samuraimart-edit-user-info-label">氏名</label>
                     </div>
                     <div class="collapse show editUserName">
                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="侍 太郎">
                         @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>氏名を入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="email" class="text-md-left samuraimart-edit-user-info-label">メールアドレス</label>
                     </div>
                     <div class="collapse show editUserMail">
                         <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus placeholder="samurai@samurai.com">
                         @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>メールアドレスを入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>

                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="phone" class="text-md-left samuraimart-edit-user-info-label">電話番号</label>
                     </div>
                     <div class="collapse show editUserPhone">
                         <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus placeholder="XXX-XXXX-XXXX">
                         @error('phone')
                         <span class="invalid-feedback" role="alert">
                             <strong>電話番号を入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="occupation" class="text-md-left samuraimart-edit-user-info-label">職業</label>
                     </div>
                     <div class="collapse show editUserPhone">
                         <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ $user->occupation }}" required autocomplete="occupation">
                         @error('occupation')
                         <span class="invalid-feedback" role="alert">
                             <strong>職業を入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
                 <br>
 
                 <div class="form-group">
                     <div class="d-flex justify-content-between">
                         <label for="allergy" class="text-md-left samuraimart-edit-user-info-label">アレルギー</label>
                     </div>
                     <div class="collapse show editUserPhone">
                         <input id="allergy" type="text" class="form-control @error('allergy') is-invalid @enderror" name="allergy" value="{{ $user->allergy }}" required autocomplete="allergy" autofocus placeholder="例：卵">
                         @error('allergy')
                         <span class="invalid-feedback" role="alert">
                             <strong>アレルギーを入力してください</strong>
                         </span>
                         @enderror
                     </div>
                 </div>
 
                 <hr>
                 <button type="submit" class="btn samuraimart-submit-button mt-3 w-25">
                     保存
                 </button>
             </form>

             <hr>
             <div class="d-flex justify-content-start">
                 <form method="POST" action="{{ route('mypage.destroy') }}">
                     @csrf
                     <input type="hidden" name="_method" value="DELETE">
                     <div class="btn dashboard-delete-link" data-bs-toggle="modal" data-bs-target="#delete-user-confirm-modal">退会する</div>
 
                     <div class="modal fade" id="delete-user-confirm-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="staticBackdropLabel"><label>本当に退会しますか？</label></h5>
                                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="閉じる">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <p class="text-center">一度退会するとデータはすべて削除され復旧はできません。</p>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn dashboard-delete-link" data-bs-dismiss="modal">キャンセル</button>
                                     <button type="submit" class="btn samuraimart-delete-submit-button">退会する</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 @endsection
