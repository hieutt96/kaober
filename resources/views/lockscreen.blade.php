<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel=icon href="{{ asset("favicon.png") }}" sizes="32x32" type="image/png">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kaober | Lockscreen</title>
  {{-- Tell the browser to be responsive to screen width --}}
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
{{-- Bootstrap 3.3.6 --}}
  <link rel="stylesheet" href="{{ asset("backend/bootstrap/css/bootstrap.min.css") }}">
  {{-- Font Awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  {{-- Ionicons --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
{{-- Theme style --}}
  <link rel="stylesheet" href="{{ asset("backend/dist/css/AdminLTE.min.css") }}">

</head>
<body class="hold-transition lockscreen">
{{-- Automatic element centering --}}
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    Kaober.com - Coming soon
  </div>
  {{-- START LOCK SCREEN ITEM --}}
  <div class="lockscreen-item">
    {{-- lockscreen image --}}
    <div class="lockscreen-image">
      <img src="{{ asset("backend/dist/img/avatar.png") }}" alt="User Image">
    </div>
    {{-- /.lockscreen-image --}}
    {{-- lockscreen credentials (contains the form) --}}
    <form class="lockscreen-credentials" method="POST" role="form">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="input-group">
        <input type="password" class="form-control" placeholder="password" name="password" required>
        <div class="input-group-btn">
          <button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    {{-- /.lockscreen credentials --}}
  </div>
  <div class="help-block text-center">
    @if(Session::has('failed'))
          {!! Session::get('failed') !!}
    @endif
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2017 <b><a href="#" class="text-black">Kaober Jsc</a></b>
  </div>
</div>

{{-- jQuery 2.2.3 --}}
<script src="{{ asset("backend/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
{{-- Bootstrap 3.3.6 --}}
<script src="{{ asset("backend/bootstrap/js/bootstrap.min.js") }}"></script>
</body>
</html>
