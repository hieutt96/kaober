<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Kaober Jsc')</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel=icon href="{{ asset("favicon.png") }}" sizes="32x32" type="image/png">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	@include('version1::includes.css')
	@include('version1::includes.js')
	
</head>
<body>

	<div class="main-top">
		@yield('navtop')
	</div>

	<div class="section main-content">
		@yield('main-content', '')
	</div>

	{{-- login and signup --}}
	@include('version1::layouts.signup')
	@include('version1::layouts.login')
	@include('version1::layouts.register')
	@include('version1::layouts.reset')

	@include('version1::layouts.footer')

</body>
</html>