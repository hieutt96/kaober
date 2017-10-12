<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	 @include('frontend::includes.css')
</head>
<body>

	<section class="hero is-primary is-medium" style="background-color: #0B8584;">
	  <!-- Hero header: will stick at the top -->
	  <div class="hero-head">
	    <header class="nav">
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
	    </header>
	  </div>

	  <!-- Hero content: will be in the middle -->
	  <a href="#">
	  	<div class="hero-body" style="background-image: url(../public/frontend/img/job.jpg);">
	  	  <div class="container has-text-centered">
	  	   	<p class="title is-3 is-spaced">Join our family</p>
	  	  </div>
	  	</div>
	  </a>
	</section>

	<section class="section">
	    <div class="container">

	    	<div class="columns">
	    	  <div class="column">
	    	    	<label class="label">Role</label>
	    	    	<div class="field">
	    	    	  <p class="control">
	    	    	    <span class="select">
	    	    	      <select>
	    	    	        <option>Select dropdown</option>
	    	    	        <option>With options</option>
	    	    	      </select>
	    	    	    </span>
	    	    	  </p>
	    	    	</div>
	    	  </div>
	    	  <div class="column">
	    	    	<label class="label">Team</label>
	    	    	<div class="field">
	    	    	  <p class="control">
	    	    	    <span class="select">
	    	    	      <select>
	    	    	        <option>Select dropdown</option>
	    	    	        <option>With options</option>
	    	    	      </select>
	    	    	    </span>
	    	    	  </p>
	    	    	</div>
	    	  </div>
	    	  <div class="column">
	    	    	<label class="label">Type</label>
	    	    	<div class="field">
	    	    	  <p class="control">
	    	    	    <span class="select">
	    	    	      <select>
	    	    	        <option>Select dropdown</option>
	    	    	        <option>With options</option>
	    	    	      </select>
	    	    	    </span>
	    	    	  </p>
	    	    	</div>
	    	  </div>
	    	  <div class="column">
	    	    	<label class="label">Location</label>
	    	    	<div class="field">
	    	    	  <p class="control">
	    	    	    <span class="select">
	    	    	      <select>
	    	    	        <option>Select dropdown</option>
	    	    	        <option>With options</option>
	    	    	      </select>
	    	    	    </span>
	    	    	  </p>
	    	    	</div>
	    	  </div>
	    	</div>
	    	<div class="is-spaced"><hr></div>

	    	{{-- bảng các ngành nghề tuyển dụng --}}
	    	<table class="table">
	    	  <tbody>
	    	  	<tr>
	    	  	  <td><p class="subtitle is-4 is-spaced"><b>Accounting</b></p></td>
	    	  	  <td></td>
	    	  	  <td></td>
	    	  	  <td></td>
	    	  	</tr>
	    	    <tr>
	    	      <td>Accounting</td>
	    	      <td>Finance Accounting</td>
	    	      <td>Regular</td>
	    	      <td>Los Angeles</td>
	    	    </tr>
	    	    <tr>
	    	      <td>Accounting</td>
	    	      <td>Finance Accounting</td>
	    	      <td>Regular</td>
	    	      <td>Los Angeles</td>
	    	    </tr>
	    	  </tbody>
	    	</table>

	    	<table class="table">
	    	  <tbody>
	    	  	<tr>
	    	  	  <td><p class="subtitle is-4 is-spaced"><b>Accounting</b></p></td>
	    	  	  <td></td>
	    	  	  <td></td>
	    	  	  <td></td>
	    	  	</tr>
	    	    <tr>
	    	      <td>Accounting</td>
	    	      <td>Finance Accounting</td>
	    	      <td>Regular</td>
	    	      <td>Los Angeles</td>
	    	    </tr>
	    	    <tr>
	    	      <td>Accounting</td>
	    	      <td>Finance Accounting</td>
	    	      <td>Regular</td>
	    	      <td>Los Angeles</td>
	    	    </tr>
	    	  </tbody>
	    	</table>

	    	<table class="table">
	    	  <tbody>
	    	  	<tr>
	    	  	  <td><p class="subtitle is-4 is-spaced"><b>Accounting</b></p></td>
	    	  	  <td></td>
	    	  	  <td></td>
	    	  	  <td></td>
	    	  	</tr>
	    	    <tr>
	    	      <td>Accounting</td>
	    	      <td>Finance Accounting</td>
	    	      <td>Regular</td>
	    	      <td>Los Angeles</td>
	    	    </tr>
	    	    <tr>
	    	      <td>Accounting</td>
	    	      <td>Finance Accounting</td>
	    	      <td>Regular</td>
	    	      <td>Los Angeles</td>
	    	    </tr>
	    	  </tbody>
	    	</table>

	    </div>
	  </section>

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