<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel=icon href="{{ asset("favicon.png") }}" sizes="32x32" type="image/png">
  {{-- responsive --}}
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  {{-- tiêu đề của page --}}
  <title>@yield('title', 'kaober.com')</title>

  @include('frontend::includes.css')

</head>
<body>
	
@include('frontend::layouts.menutop')
<div class="main-content">

	@yield('content')

</div>

@include('frontend::layouts.footer')

@include('frontend::includes.js')
<script type="text/javascript">
    $(document).ready(function(){
      $('.nav-toggle').on('click', function() {
        
        $('#top1').addClass('is-active');

      });
    });
</script>
</body>
</html>
