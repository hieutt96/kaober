<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	 @include('frontend::includes.css')
	 <style type="text/css">
	 	ul li {
	 		list-style: none;
	 	}
	 	.is-fixed-nav {
	 		position: fixed !important;
	 		top: 0;
	 		left: 0;
	 		right: 0;
	 	}
	 </style>
</head>
<body>

	<nav class="nav" style="background-color: #0B8584;">
	  <div class="container">
	    <div class="nav-left">
	      <a class="nav-item">
	        <img src="{{ asset('kaober.png') }}" alt="Logo">
	      </a>
	      <a class="nav-item is-tab">
	        <p style="color: #fff;">Việc làm</p>
	      </a>
	      <a class="nav-item is-tab">
	        <p style="color: #fff;">Tin tức</p>
	      </a>
	      <a class="nav-item is-tab is-active">
	        <p style="color: #fff;">Nhà đầu tư</p>
	      </a>
	    </div>
	  </div>
	</nav>

	<div class="content">
		<section class="section">
			<div class="container">
				<div class="columns">
				  <div class="column is-one-quarter">
				    <aside class="menu">
				      <p class="menu-label">
				        DANH MỤC NHÀ ĐẦU TƯ
				      </p>
				      <ul class="menu-list">
				        <li ><a class="is-active">Company Profile</a></li>
				        <li><a>Customers</a></li>
				        <li><a>Investor</a></li>
				      </ul>
				      <p class="menu-label">
				        Contact
				      </p>
				      <ul class="menu-list">
				      	<li ><a class="subtitle is-6">Email: kaober@gmail.com</a></li>
				        <li ><a class="subtitle is-6">Lương yên, Hai bà trưng, hà nội</a></li>
				      </ul>
				    </aside>
				  </div>
				  <div class="column">
				    <p class="title is-5" style="color: #000;"><b>Kaober Jsc.</b></p>
				    <p class="is-spaced">Kaober là một công ty thương mại điện tử và khai phá internet.</p>
				    <p> Công nghệ thực sự đã thay đổi tầm nhìn của nhân loại và truyền cảm hứng cho chúng tôi tạo ra những dịch vụ mới, cải thiện cách mọi người mua sắm, giải trí và tương tác với nhau.
				    </p>
				  </div>
				</div>
			</div>
		</section>
	</div>

	<div class="container is-spaced"><hr></div>

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
	<br>

</body>
</html>