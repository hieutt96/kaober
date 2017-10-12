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

	<nav class="nav" style="background-color: #FFFC00;">
	  <div class="container">
	    <div class="nav-left">
	      <a class="nav-item">
	        <img src="{{ asset('kaober.png') }}" alt="Logo">
	      </a>
	      <a class="nav-item is-tab">
	        <p style="color: #000;">Việc làm</p>
	      </a>
	      <a class="nav-item is-tab is-active">
	        <p style="color: #000;">Tin tức</p>
	      </a>
	      <a class="nav-item is-tab ">
	        <p style="color: #000;">Nhà đầu tư</p>
	      </a>
	    </div>
	  </div>
	</nav>

	<div class="content">
		<section class="section top">
			<div class="container">
				<div class="columns">
				  <div class="column is-one-third">
				    <p class="subtitle is-6 is-spaced"><b>JUNE 7 2017 / TECHNOLOGY, COMMUNITY, HOMES, NEWS</b></p>
				    <p class="title is-3 is-spaced"><b>Introducing A New Way to Check In</b></p>
				    <p class="subtitle is-6 is-spaced">Trip booked: check. Bags packed: check. Arrival to your destination: check. Checking into your listing: hmmmmm. Easy check-ins are crucial...</p>
				  </div>
				  <div class="column">
				    <img src="{{ asset('files/images/news.jpg') }}">
				  </div>
				</div>
			</div>
		</section>

		<hr>

		<section class="section">
			<div class="container">
				<div class="columns">
					  <div class="column">
					    <div class="card">
					      <div class="card-image">
					        <figure class="image is-4by3">
					          <img src="{{ asset('files/images/news.jpg') }}" alt="Image">
					        </figure>
					      </div>
					      <div class="card-content">
					        <div class="media">
					          <div class="media-left">
					            <figure class="image is-48x48">
					              <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
					            </figure>
					          </div>
					          <div class="media-content">
					            <p class="title is-4">kaober</p>
					            <p class="subtitle is-6">kaober@gmail.com</p>
					          </div>
					        </div>

					        <div class="content">
					          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					          Phasellus nec iaculis mauris. <a>@bulmaio</a>.
					          <a>#css</a> <a>#responsive</a>
					          <br>
					          <small>11:09 PM - 1 Jan 2017</small>
					        </div>
					      </div>
					    </div>
					  </div>
					  <div class="column">
				    <div class="card">
				      <div class="card-image">
				        <figure class="image is-4by3">
				          <img src="{{ asset('files/images/news.jpg') }}" alt="Image">
				        </figure>
				      </div>
				      <div class="card-content">
				        <div class="media">
				          <div class="media-left">
				            <figure class="image is-48x48">
				              <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
				            </figure>
				          </div>
				          <div class="media-content">
				            <p class="title is-4">kaober</p>
				            <p class="subtitle is-6">kaober@gmail.com</p>
				          </div>
				        </div>

				        <div class="content">
				          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				          Phasellus nec iaculis mauris. <a>@bulmaio</a>.
				          <a>#css</a> <a>#responsive</a>
				          <br>
				          <small>11:09 PM - 1 Jan 2017</small>
				        </div>
				      </div>
				    </div>
				  </div>
				  <div class="column">
				    <div class="card">
				      <div class="card-image">
				        <figure class="image is-4by3">
				          <img src="{{ asset('files/images/news.jpg') }}" alt="Image">
				        </figure>
				      </div>
				      <div class="card-content">
				        <div class="media">
				          <div class="media-left">
				            <figure class="image is-48x48">
				              <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
				            </figure>
				          </div>
				          <div class="media-content">
				            <p class="title is-4">kaober</p>
				            <p class="subtitle is-6">kaober@gmail.com</p>
				          </div>
				        </div>

				        <div class="content">
				          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				          Phasellus nec iaculis mauris. <a>@bulmaio</a>.
				          <a>#css</a> <a>#responsive</a>
				          <br>
				          <small>11:09 PM - 1 Jan 2017</small>
				        </div>
				      </div>
				    </div>
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