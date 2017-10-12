{{-- @include('manageruser::layouts.failed') --}}
<nav class="navtop nav  @yield('shadow', '') ">
    <div class="nav-left">
      <a class="nav-item" href="{{ url('/') }}">
        <img src="{{ asset("kaober2.svg") }}" alt=" logo">
      </a>
    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu" id="topnav">
      <a class="nav-item is-tab" href="{{ route('frontend.blog') }}">Blog</a>
      <a class="nav-item is-tab" href="{{ route('frontend.help') }}">Trợ giúp</a>

      @if( Auth::user() ) 
            <?php $user = Auth::user(); ?>
            {{-- <div class="nav-item is-tab">
              <span class="dropcustom select">
              	<select>
              		<option disabled selected><b>Trang cá nhân</b></option>
              		<option disabled>───</option>
              		<option value="default" >Danh sách yêu thích</option>
              		<option><a href="{{ route('logout') }}">Đăng xuất</a></option>
              	</select>
              </span>
            </div> --}}
            <a class="nav-item is-tab">
              <div class="avatar-nav">
                @if($user->facebook_id)
                  <img src="{{ $user->avatar or "https://placehold.it/64x64" }}" width="28" class="avatar-nav">
                @else
                  <img src="{{ asset('files/images/'.$user->avatar) }}" width="28" class="avatar-nav">
                @endif
              </div>
            </a>
      @else
          {{-- <a class="nav-item is-tab" id="getsignup">Đăng Ký</a>
          <a class="nav-item is-tab" id="getlogin">Đăng nhập</a> --}}
           <a href="{{ route('register') }}" class="nav-item is-tab">Đăng Ký</a>
          <a href="{{ route('login') }}" class="nav-item is-tab">Đăng nhập</a>
      @endif

    </div>
</nav>

