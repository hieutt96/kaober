@extends('auth::layouts.master')
@section('title', 'Đăng ký tài khoản')
@section('name', 'đăng ký')
@section('content')

  <style type="text/css">
    .form-register {
      margin-right: 5px;
    }
    .floatName {
      float: left;
      margin-right: 10%;
    }
  </style>

  <div class="section has-text-centered">
    <a href="{{ route('frontend.home') }}"><img src="{{ asset("backend/login/img/logo.png") }}" alt="Logo"></a>
  </div>

  <h1 class="title">Đăng ký tài khoản</h1>

  <form method="POST" action="{{ route('register') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-register box">

      @include('auth::layouts.error')

      @if($status = Session::get('status'))
        <p class="help is-success">{{ $status }}</p>
        <hr>
      @endif


        <div class="floatName">
          <label class="label">Họ và tên đệm</label>
          <p class="control">
            <input class="input" type="text" placeholder="Nguyễn Văn " name="fname" value="{{ old('fname') }}" autofocus required>
          </p>
        </div>

        <div class="floatName">
          <label class="label">Tên</label>
          <p class="control">
            <input class="input" type="text" placeholder="A" name="lname" size="5" value="{{ old('lname') }}" required>
          </p>
        </div>

        <div class="is-clearfix "></div>       

      <label class="label">Địa chỉ email </label>
      <p class="control">
        <input class="input" type="email" placeholder="nguyenvana@gmail.com" name="email" value="{{ old('email') }}" required>
      </p>

      <label class="label">Mật khẩu</label>
      <p class="control">
        <input class="input" type="password" placeholder="●●●●●●●" name="password" required>
      </p>
      <label class="label">Nhập lại mật khẩu</label>
      <p class="control">
        <input class="input" type="password" placeholder="●●●●●●●" name="retype" required>
      </p>
      <hr>

{{--       <label class="label">Tên shop</label>
      <p class="control">
        <input class="input" type="text" name="email">
      </p>

      <label class="label">Địa chỉ URL shop</label>
      <p class="control">
        <input class="input" type="text" name="email">
      </p>

      <hr> --}}

      <p class="control">
        <button class="button is-primary">ĐĂNG KÝ NGAY</button>
        <a href="{{ route('login') }}" class="button is-primary is-pulled-right">ĐĂNG NHẬP</a>
      </p>
    </div>
  </form>
@endsection