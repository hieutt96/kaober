@extends('auth::layouts.master')
@section('title', 'Đăng nhập')
@section('name', 'Đăng nhập')
@section('content')
<section class="hero is-fullheight">
        <div class="hero-heading">
          <div class="section has-text-centered">
            <a href="{{ route('frontend.home') }}"><img src="{{ asset("/backend/login/img/logo.png") }}" alt="Logo"></a>
          </div>
        </div>
        <div class="hero-body">
          <div class="container">
            <div class="columns">
              <div class="column is-8 is-offset-2">

                {{-- <h1 class="avatar has-text-centered section">
                  <img src="https://placehold.it/128x128">
                </h1> --}}

                <div class="login-form">

                {{-- LOGIN FORM --}}

                <form method="POST" action="{{ route('login') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  @include('auth::layouts.error')

                  {{-- trạng thái đăng nhập --}}
                  @if($status = Session::get('status'))
                  <p class="help is-success">{{ $status }}</p>
                  <hr>
                  @endif

                  {{-- sai thông tin đăng nhập --}}
                  @if($invalid = Session::get('invalid'))
                  <p class="help is-danger">{{ $invalid }}</p>
                  <hr>
                  @endif
                  
                  <p class="control has-icon has-icon-right" style="margin-bottom: 10px;">
                    <input class="input email-input" type="email" placeholder="kaober@gmail.com" name="email" autofocus required>
                    <span class="icon user">
                      <i class="fa fa-user"></i>
                    </span>
                  </p>

                  <p class="control has-icon has-icon-right">
                    <input class="input password-input" type="password" placeholder="●●●●●●●" name="password" required>
                    <span class="icon user">
                      <i class="fa fa-lock"></i>
                    </span>
                  </p>

                  <input type="checkbox" name="remember" id="remember">
                  <label for="remember">Ghi nhớ đăng nhập?</label> <br>

                  <p class="control login">
                    <button class="button is-success is-outlined is-large is-fullwidth">Đăng nhập</button>
                  </p>

                  </form>

                </div>
                <div class="section forgot-password">
                  <p class="has-text-centered">
                    <a href="{{ route('password.reset') }}">Quên mật khẩu?</a>
                    <a href="{{ route('register') }}">Đăng ký</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
@endsection