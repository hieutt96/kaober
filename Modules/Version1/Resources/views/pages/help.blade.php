@extends('version1::master')
@section('title', 'Trang chủ')

@section('navtop')

	<style type="text/css">
	  .help-center-search {
	    font-size: 2.0rem !important;
	    /*width: 70%;*/
	  }
	  .circle-help {
	      display:block;
	      height: 100px;
	      width: 100px;
	      border-radius: 50%;
	      border: 1px solid #afadad;
	      background-color: #fff;
	  }

	  .div-help {
	    width: 60%;
	  }
	</style>

	@include('version1::layouts.navhome')

	<section class="hero is-primary is-medium" style="background-color: #0c8584;">
	  <div class="hero-body">
	    <div class="container has-text-centered div-help">
	      <h1 class="title">
	        Tìm kiếm sự giúp đỡ ?
	      </h1>
	      <form method="POST">
	      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		      <div class="field">
			        <p class="control has-icons-left">
			          <input class="help-center-search input is-large" type="text" placeholder="">
			          <span class="icon is-small is-left">
			                <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display:block;fill:#767676;height:25px;width:25px; margin-top: 20px; margin-left: 15px;" data-reactid="5"><path fill-rule="evenodd" d="M23.53 22.47l-6.807-6.808A9.455 9.455 0 0 0 19 9.5 9.5 9.5 0 1 0 9.5 19c2.353 0 4.502-.86 6.162-2.277l6.808 6.807a.75.75 0 0 0 1.06-1.06zM9.5 17.5a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" data-reactid="6"></path></svg>
			          </span>
			        </p>
		      </div>
	      </form>

	    </div>
	  </div>
	</section>

	{{-- <section class="hero is-light">
	  <div class="hero-body">
	    <div class="container">
	      <div class="columns">
	        <div class="column is-1">
	          <div class="circle-help">
	              
	          </div>
	        </div>
	        <div class="column is-1">
	          <img src="{{ asset('version1/img/arrow.png') }}">
	        </div>
	      </div>
	    </div>
	  </div>
	</section> --}}

	<nav class="nav has-shadow">
	  <div class="container">
	      <div class="nav-left">
	        <a class="nav-item">
	          Trợ giúp  &nbsp; / &nbsp; Hướng Dẫn Đặt Hàng
	        </a>
	      </div>
	  </div>
	</nav>

	<br>
	<div class="is-spaced"></div>

	<div class="container section">
		<div class="columns">
			<div class="column is-2">
				<div class="menu-left">
					<aside class="menu">
					  <p class="menu-label">
					    Câu hỏi thường gặp
					  </p>
					  <ul class="menu-list">
					      <li><a>thanh toán</a></li>
					      <li><a>tin tức</a></li>
					      <li><a>Hướng Dẫn Đặt Hàng</a></li>
					    </ul>
					</aside>
				</div>
			</div>
			<div class="column is-1"></div>
			<div class="column is-7">
				<div class="content-detail-help">
					<p class="title is-3"><b>Hướng Dẫn Đặt Hàng</b></p>
					<div class="post-content">
						Khi đã tìm được sản phẩm mong muốn, quý khách vui lòng bấm vào hình hoặc tên sản phẩm để vào được trang thông tin chi tiết của sản phẩm, sau đó:<br>

						a. Kiểm tra thông tin sản phẩm: giá, thông tin khuyến mãi. <br>

						b. Chọn số lượng mong muốn. <br>
					</div>

				</div>
				</div>
			</div>
			<div class="column is-2"></div>
		</div>
	</div>

@endsection