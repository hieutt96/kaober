<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel=icon href="{{ asset("favicon.png") }}" sizes="32x32" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin')</title>
  
  <link rel="stylesheet" type="text/css" href="{{ asset("backend/login/css/login.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("backend/login/css/bulma.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("backend/login/css/font-awesome.css") }}">
  
</head>
<body>
  <div class="login-wrapper columns">
    <div class="column is-8 is-hidden-mobile hero-banner" >
      <section class="hero is-fullheight is-dark" style="@yield('bg', 'background-image: url(./frontend/img/bg.jpg);')">
        <div class="hero-body">
          <div class="container section">
            <div class="has-text-centered">
              <h1 class="title is-1">@yield('name', 'Admin')</h1> <br>
              <p class="title is-3">Hệ thống bán lẻ trực tuyến Kaober.com</p>
            </div>

          </div>
        </div>
        <div class="hero-footer">
          <p class="has-text-centered">Design by <a href="{{ asset('frontend.home') }}">kaober</a> .Inc</p>
        </div>
      </section>  
    </div>
    <div class="column is-4">

      @yield('content') 

    </div>
  </div>

<script type="text/javascript" src="{{ asset('backend/login/js/jquery-3.2.1.min.js') }}"></script>

</body>
</html>