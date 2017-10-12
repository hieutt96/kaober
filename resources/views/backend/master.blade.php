<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel=icon href="{{ asset("favicon.png") }}" sizes="32x32" type="image/png">
  


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  {{-- tiêu đề của page --}}
  <title>@yield('title', 'Shop - kaober.com')</title>

  @include('backend.links.css')

</head>
{{--  tùy chọn layout fixed or ko, thêm class fixed ,  sidebar-collapse--}}
@if( !(\Session::exists('themeadmin')) )
    @if( !(\Session::has('themeadmin')) )
        {!! \Session::put('themeadmin', 'skin-green') !!}
    @endif
@endif
@if( !(\Session::exists('fixsidebar')) )
    @if( !(\Session::has('fixsidebar')) )
        {!! \Session::put('fixsidebar', 'fixed') !!}
    @endif
@endif

@if( !(\Session::exists('collapsesidebar')) )
    @if( !(\Session::has('collapsesidebar')) )
        {!! \Session::put('collapsesidebar', 'no-sidebar-collapse') !!}
    @endif
@endif

<body class="hold-transition wysihtml5-supported sidebar-mini {!! \Session::get('themeadmin') !!} {!! \Session::get('fixsidebar') !!} {!! \Session::get('collapsesidebar') !!}" style="height: auto;">
<div class="wrapper">

   {{-- Main Header --}}
  @include('backend.layouts.header')

  {{-- Left side column. contains the logo and sidebar --}}
  @include('backend.layouts.sidebar')

  {{-- Content Wrapper. Contains page content --}}
  <div class="content-wrapper">

      {{-- breadcrumb --}}
      @include('backend.layouts.breadcrumb')

      {{-- Main content --}}
      @yield('content', '')

  </div>
  {{-- /.content-wrapper --}}

  {{-- footer --}}
  @include('backend.layouts.footer')

  {{-- ./wrapper --}}

  {{-- link js --}}
  @include('backend.links.js')

</body>
</html>
