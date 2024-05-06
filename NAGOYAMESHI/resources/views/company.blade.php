@extends('layouts.app')
 
 @section('content')
 <div class="container">
   <div class="row justify-content-center-center">
     <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
      <h1 class="mb-3">会社情報</h1>
      <div class="mb-3">
        <a href="{{ route('mypage')}}">戻る</a>
      </div>
      <table class="table table-bordered">
      <tbody>
        <tr>
          <th>会社名</th>
          <th>NAGOYAMESHI株式会社</th>
        </tr>
        <tr>
          <th>代表者</th>
          <th>侍太郎</th>
        </tr>
        <tr>
          <th>設立日</th>
          <th>2024年5月1日</th>
        </tr>
        <tr>
          <th>郵便番号</th>
          <th>〒123-4567</th>
        </tr>
        <tr>
          <th>住所</th>
          <th>東京都侍区侍街1-2-3</th>
        </tr>
        <tr>
          <th>事業内容</th>
          <th>飲食店の検索・予約サービス</th>
        </tr>
      </tbody>
      </table>
     </div>
   </div>
 </div>
 @endsection