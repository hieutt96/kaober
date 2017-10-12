@extends('version1::master')
@section('title', 'chi tiết sản phẩm')

@section('navtop')
	@include('version1::includes.notisuccess')
	<nav class="nav">
	  <div class="nav-left">
	    <a class="nav-item" href="{{ url('/') }}">
	      <img src="{{ asset("kaober2.svg") }}" alt=" logo">
	    </a>
	  </div>
	  <div class="nav-right">
	    <a class="nav-item">
	      	SĐT HỖ TRỢ: 01236368360 
	    </a>
	  </div>
	</nav>
@endsection

@section('main-content')
	
	<div class="container checkoutpage">
		<div class="box">
			<p class="title is-3 has-text-centered is-spaced"><strong>QUÁ TRÌNH THANH TOÁN</strong></p>

			<div class="checkout-step">
				<progress class="progress is-primary" value="70" max="100">70%</progress>
			</div>
			<br>
			<p class="title is-5 has-text-centered is-spaced"><strong>Thông tin mua hàng</strong></p>
			<br>

			@if(count($errors) > 0)
			    @foreach($errors->all() as $error)
			    	<h5>{{ $error }}</h5>
			    @endforeach
			@endif

			<form method="POST" action="">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="columns">
				<div class="column is-7">
					<div class="box">
						<div class="notification">
							ĐỊA CHỈ GIAO HÀNG
						</div>
						<div class="field">
						  <label class="label">Họ và tên</label>
						  <p class="control">
						    <input id="name" name="name" class="input" type="text" placeholder="Ví dụ: Nguyễn Văn A">
						  </p>
						</div>
						<div class="field">
						  <label class="label">Địa chỉ email</label>
						  <p class="control">
						    <input class="input" id="email" name="email" type="email" placeholder="kaoberinc@gmail.com">
						  </p>
						</div>
						<div class="field">
						  <label class="label">Số điện thoại</label>
						  <p class="control">
						    <input class="input" id="phone" name="phone" type="number" placeholder="">
						  </p>
						  {{-- <p class="help is-primary">Nhân viên giao nhận kaober sẽ liên lạc SĐT này.</p> --}}
						</div>
						  <div class="field">
						    <label class="label">Thành phố / Tỉnh</label>
						    <p class="control">
						      <span class="select is-fullwidth">
						        <select id="city" name="city">
						          @foreach( $cities as $city )
						          	<option value="{{ $city->name }}">{{ $city->name }}</option>
						          @endforeach
						        </select>
						      </span>
						    </p>
						</div>
						<div class="field">
						  <label class="label">Địa chỉ chi tiết</label>
						  <p class="control">
						    <input class="input" id="address" name="address" type="text" placeholder="Ví dụ: số 1, ngõ 1, Minh Khai, Hai Bà Trưng">
						  </p>
						</div>

							<button type="submit" class="button is-danger is-fullwidth is-medium"><h5 class="subtitle" style="color: #fff; font-weight: 500;">Thanh toán ngay</h5></button>

					</div>
				</div>
				<div class="column is-5">
					<div class="box">
						<div class="notification">
							ĐƠN HÀNG
						</div>
						<table class="table">
							<tbody>
								@foreach ( $carts as $product )
								<tr>
									<td style="width: 60px;">
										<img src="{!! asset('files/images/'.$product->options['thumbnail']) !!}" alt="Image">
									</td>
									<td>{{ $product->name }}</td>
									<td class="has-text-right">{{ number_format($product->price,3,'.',',') }}đ x {{ $product->qty }} = {{ number_format($product->price * $product->qty,3,'.',',') }}đ</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<hr>
						<table class="table">
							<tbody>
								<tr>
									<td>Tổng tiền</td>
									<td class="has-text-right"><p class="title is-4">{{ Cart::total() }}đ</p></td>
								</tr>
								<tr>
									<td>Phí vận chuyển</td>
									<td class="has-text-right"><p class="title is-4">0đ</p></td>
								</tr>
								<tr>
									<td>Tổng tiền cần thanh toán</td>
									<td class="has-text-right"><p class="title is-4" style="color: red;">{{ Cart::total() }}đ</p></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>

@endsection