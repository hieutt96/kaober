@extends('version1::master')
@section('title', 'chi tiết sản phẩm')

@section('navtop')
	@extends('version1::layouts.navhome')
	@section('shadow', 'has-shadow')
@endsection

@section('main-content')
	
	<div class="container cartpage">
		<div class="notification">
			Freeship cho đơn hàng trên 100.000 đ
		</div>
		<div class="cart-product">
			<div class="columns">
				<div class="column is-9">
					<div class="box">
						GIỎ HÀNG ( <b>{{ Cart::count() }}</b> )
						<hr>
						<form role="form" method="POST" action="">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@foreach ( $carts as $product )
						<div class="columns">
							<div class="column is-2">
								<img src="{!! asset('files/images/'.$product->options['thumbnail']) !!}" alt="Image">
							</div>
							<div class="column is-10">
								<table class="table">
									<tbody>
										<tr>
											<th style="width: 250px;">{{ $product->name }}</th>
											<td>{{ number_format($product->price,3,'.',',') }} đ</td>
											<td>
												<div class="field has-addons" style="max-width: 100px;">
												  <p class="control">
												    <input class="qtyproduct input has-text-centered" type="number" value="{{ $product->qty }}" id="{{ $product->rowId }}" name="qtyproduct">
												  </p>
												</div>
											</td>
											<td>{{ number_format($product->price * $product->qty,3,'.',',') }} đ</td>
										</tr>
										<tr>
											<td class="is-pulled-left">Cung cấp bởi: Kaober</td>
											<td></td>
											<td></td>
											<td class="is-pulled-right"><a href="{{ route('frontend.cart.delete', $product->rowId) }}">Xóa</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<hr>
						@endforeach
						</form>
					</div>
				</div>
				<div class="column is-3">
					<div class="box">
						<table class="table">
							<tbody>
								<tr>
									<td>Tạm tính</td>
									<td class="has-text-right"><p class="title is-5">{{ Cart::total() }} đ</p></td>
								</tr>
								<tr>
									<td>Phí vận chuyển</td>
									<td class="has-text-right"><p class="title is-5">0 đ</p></td>
								</tr>
								<tr>
									<td>Thành tiền</td>
									<td class="has-text-right"><p class="title is-4" style="color: red;">{{ Cart::total() }}</p></td>
								</tr>
							</tbody>
						</table>
						{{-- style="background-color: #0B8584;" --}}
						<a href="{{ route('frontend.checkout.step1') }}" class="button is-danger is-fullwidth is-medium"><h5 class="subtitle" style="color: #fff; font-weight: 500;">Tiến hành đặt hàng</h5></a>
					</div>
				</div>
			</div>

			{{-- recommend --}}
			{{-- <div class="box">
				<p class="title is-3">Bạn có thể quan tâm</p>
				<hr>
			</div> --}}
		</div>
	</div>

@endsection