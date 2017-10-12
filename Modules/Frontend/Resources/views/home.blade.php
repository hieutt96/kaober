<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 @include('frontend::includes.css')
	 <style type="text/css">
	 	.info-kaober {
	 		padding-bottom: 40px;
	 	}
	 	.logo-home {
	 		padding-top: 35px;
	 	}
	 	.color-text-black {
	 		color: #000;
	 	}
	 </style>
</head>
<body>

	<section class="hero is-success is-fullheight" style="background-color: #00bf8f;">
	  <!-- Hero header: will stick at the top -->
	  <div class="hero-head">
	    <header class="nav">
	      <div class="container">
	        <div class="nav-left">
	          {{-- <a class="nav-item">
	            <img src="{{ asset('kaober.png') }}" alt="Logo">
	          </a> --}}
	          <a class="nav-item is-tab is-active">
	            <p style="color: #fff;">Việc làm</p>
	          </a>
	          <a class="nav-item is-tab">
	            <p style="color: #fff;">Tin tức</p>
	          </a>
	          <a class="nav-item is-tab">
	            <p style="color: #fff;">Nhà đầu tư</p>
	          </a>
	        </div>
	   {{--      <span class="nav-toggle" style="color: #000;">
	          <span></span>
	          <span></span>
	          <span></span>
	        </span> --}}
	      </div>
	    </header>
	  </div>

	  <!-- Hero content: will be in the middle -->
	  {{-- <div class="hero-body"> --}}
	  <div class="body-kaober">
	    <div class="container" style="color: #fff;">
	      <div class="columns info-kaober">
	        <div class="column is-6">
	        	
	          <p class="title is-4" style="color: #fff;"><b>Kaober Jsc.</b></p>
	          <p class="title is-spaced is-5">
	          {{-- <img src="{{ asset('kaober.svg') }}" class="logo-home" width="200px;">  --}}
	          là một công ty thương mại điện tử và khai phá internet.</p>
	          <p class="title is-spaced is-5"> Công nghệ thực sự đã thay đổi tầm nhìn của nhân loại và truyền cảm hứng cho chúng tôi tạo ra những dịch vụ mới, cải thiện cách mọi người mua sắm, giải trí và tương tác với nhau.
	          </p>
	        </div>
	        <div class="column is-1"></div>
	        <div class="column is-5 has-text-centered">
	          <img src="{{ asset('kaober6.svg') }}" class="logo-home">
	        {{--   <svg id="circle" height="200" xmlns="http://www.w3.org/2000/svg">
			      <circle id="greencircle" cx="50" cy="50" r="50" fill="green" />
			    </svg> --}}
	        </div>
	      </div>
	    </div>
	  </div>
	  {{-- </div> --}}

	<nav class="nav" style="background-color: #fff;">
	    <div class="container">
	    	<div class="nav-left">
	    	  <a class="nav-item">
	    	    <p style="color: #000;">@ Kaober Jsc</p>
	    	  </a>
	    	  <a class="nav-item">
	    	    <p style="color: #000;">Chính sách bảo mật</p>
	    	  </a>
	    	  <a class="nav-item">
	    	      <p style="color: #000;">Điều khoản dịch vụ</p>
	    	  </a>
	    	  <a class="nav-item">
	    	      <p style="color: #000;">Các điều khoản và chính sách khác</p>
	    	  </a>
	    	  <a class="nav-item">
	    			<div class="field">
	    			  <p class="control">
	    			    <span class="select">
	    			      <select>
	    			        <option>Tiếng anh</option>
	    			        <option>Tiếng việt</option>
	    			        <option>Tiếng trung</option>
	    			      </select>
	    			    </span>
	    			  </p>
	    			</div>
	    		</a>
	    	</div>
	    </div>
	    <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
	    <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
	    <span class="nav-toggle">
	      <span></span>
	      <span></span>
	      <span></span>
	    </span>
	</nav>

	</section>

</body>
</html>