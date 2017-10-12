@extends('auth::layouts.master')
@section('title', 'Đăng nhập khu vực quản trị')
@section('name', 'Quên mật khẩu đăng nhập?')
@section('content')
<section class="hero is-fullheight">
        <div class="hero-heading">
          <div class="section has-text-centered">
            <img src="{{ asset("backend/login/img/logo.png") }}" alt="Logo">
          </div>
        </div>
        <div class="hero-body">
          <div class="container">
            <div class="columns">
              <div class="column is-8 is-offset-2">

                <div class="login-form">

                <form method="POST" action="{{ route('password.reset') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  @include('auth::layouts.error')

                  {{-- trạng thái đăng nhập --}}
                  @if($status = Session::get('status'))
                  <p class="help is-success">{{ $status }}</p>
                  <hr>
                  @endif
                  
                  <p class="control has-icon has-icon-right" style="margin-bottom: 10px;">
                    <input class="input email-input" type="email" placeholder="khutrungbay@gmail.com" name="email" autofocus required>
                    <span class="icon user">
                      <i class="fa fa-user"></i>
                    </span>
                  </p>

                  <p class="control login">
                    <button class="button is-success is-outlined is-fullwidth">Gửi link đặt lại mật khẩu</button>
                  </p>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
@endsection