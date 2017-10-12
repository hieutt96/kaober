<?php if(Auth::check()) $userCurrent = Auth::user(); ?>

<header class="main-header">
    {{-- Logo --}}
    <a href="{{ url('/') }}" class="logo" target="blank">
      {{-- mini logo for sidebar mini 50x50 pixels <b>K.</b>B--}}
      <span class="logo-mini"><img src="{{ asset('kaober.png') }}" style="width: 20px; height: 20px;"></span>
      {{-- logo for regular state and mobile devices --}}
      <span class="logo-lg"><img src="{{ asset('kaober.png') }}" style="width: 20px; height: 20px;"> <b>Kaober.com</b></span>
    </a>
    {{-- Header Navbar: style can be found in header.less --}}
    <nav class="navbar navbar-static-top">
       {{-- Sidebar toggle button --}}
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('files/images/'.$userCurrent->avatar) }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ $userCurrent->lastname or "kaober" }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('files/images/'.$userCurrent->avatar) }}" class="img-circle" alt="User Image">

                <p>
                  {{ $userCurrent->firstname or "kao" }} {{ $userCurrent->lastname or "ber" }}
                  <small>{{ $userCurrent->about or "Thêm lời giới thiệu của bạn"}}</small>
                  <small>{{ $userCurrent->address or "Địa chỉ của bạn"}}</small>
                </p>
              </li>
              <!-- Menu Body -->



              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('admin::user::edit', $userCurrent->id) }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>