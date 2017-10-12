@extends('version1::master')
@section('title', 'Trang chủ')

@section('navtop')
	@include('version1::layouts.navhome')
	@include('version1::layouts.tab')
	@include('version1::layouts.filter')
@endsection

@section('main-content')

	<div class="container">
		<p class="title is-4  has-text-centered" style="font-weight: 400;">Sản phẩm hiện chưa có trên hệ thống. Chúng tôi có thể đặt giúp bạn.</p>
			<form method="POST" action="{{ route('frontend.search.orderbook') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			    <div style="width: 50%; margin: auto;">
			    	<div class="field">
			    		<label class="label">Tên cuốn sách bạn cần đặt *</label>
			    	  <p class="control">
			    	    <input class="input is-primary" type="text" id="title" name="title" required>
			    	  </p>
			    	</div>
			    	<div class="field">
			    		<label class="label">Địa chỉ email *</label>
			    	  <p class="control">
			    	    <input class="input is-primary" type="email" id="email" name="email" required>
			    	  </p>
			    	</div>
			    	<div class="field">
			    		<label class="label">Số điện thoại (không bắt buộc)</label>
			    	  <p class="control">
			    	    <input class="input is-primary" type="number" id="phone" name="phone">
			    	  </p>
			    	</div>
			    	<div class="field">
			    		<label class="label">Họ và tên (không bắt buộc)</label>
			    	  <p class="control">
			    	    <input class="input is-primary" type="text" id="username" name="username">
			    	  </p>
			    	</div>
			    	<button type="submit" class="button is-danger is-fullwidth is-medium"><h5 class="subtitle" style="color: #fff; font-weight: 500;">Yêu cầu đặt sách</h5></button>
			    </div>
			</form>

	</div>

	{{-- lọc theo danh mục sản phẩm --}}
	@include('version1::layouts.modalfilter1')
@endsection