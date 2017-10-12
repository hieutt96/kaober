@extends('version1::master')
@section('title', $product->title)

@section('navtop')
	@extends('version1::layouts.navhome')
	@section('shadow', 'has-shadow')
@endsection

@include('version1::includes.notisuccess')
@include('version1::layouts.modalreview')

@section('main-content')
	<div class="product-detail">
		<div class="container">
			<div class="columns">
				<div class="column is-6">
					<h1 class="title is-spaced"><b>{{ $product->title }}</b></h1>
					<h2 class="subtitle is-spaced">Cung cấp  bởi: {{ $product->shop->title }}</h2>
					<hr>
					<div class="columns">
						<div class="column is-3">
							<p class="title is-5" style="font-weight: 400;">Giới thiệu sách</p>
						</div>
						<div class="column is-9">
								{!! $product->description !!}
						</div>
					</div>
					<hr>
						{{-- thông tin chi tiết --}}
						 {{-- <div class="columns">
							<div class="column is-3">
								<p class="title is-5" style="font-weight: 400;">Thông tin chi tiết</p>
							</div>
							<div class="column is-9">
								<table class="table is-striped">
									<tbody>
										<tr>
											<td>sdk</td>
											<td>thông tin chi tiết</td>
										</tr>
										<tr>
											<td>sdk</td>
											<td>thông tin chi tiết</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <hr> --}}

						 <div class="columns">
							<div class="column is-3">
								<p class="title is-5" style="font-weight: 400;">Từ khóa</p>
							</div>
							<div class="column is-9">
								<span class="tag is-light">{!! $product->meta_description !!}</span>
								<span class="tag is-light">{!! $product->meta_keyword !!}</span>
							</div>
						</div> <hr>

						<p class="title is-4 is-spaced" style="font-weight: 400;">Đánh giá</p>

						@if(Auth::user())
						<form role="form" method="POST" action="{{ route('frontend.product.review', $product->product_id) }}">
						  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<article class="media">
						  <figure class="media-left">
						    <p class="">
						    	<?php $user = Auth::user(); ?>
						    	@if($user->facebook_id)
						    	<img src="{{$user->avatar}}" class="avatar">
						    	@else
						    		<img src="{{ asset('files/images/'.$user->avatar) }}" class="avatar">
						    	@endif
						    </p>
						  </figure>
						  <div class="media-content">
						    <div class="field">
						      <p class="control">
						        <textarea name="reviewproduct" id="reviewproduct" class="textarea" placeholder="viết nhận xét..." required></textarea>

						      </p>
						    </div>
						    <nav class="level">
						      <div class="level-left">
						        <div class="level-item">
						          {{-- <a class="button is-info">Submit</a> --}}
						        </div>
						      </div>
						      <div class="level-right">
						        <div class="level-item">
						          <button class="button is-success" type="submit" style="background-color: #0B8584;">Gửi nhận xét</button>
						        </div>
						      </div>
						    </nav>
						  </div>
						</article>
						</form>
						@else
								<a id="writereview" name="writereview" class="button is-success" style="background-color: #0B8584; margin-bottom: 20px;">Viết đánh giá</a>
								<div class="modal" id="modal-review">
								  <div class="modal-background"></div>
									  <div class="modal-content">
											  <div class="box">
											    Bạn phải đăng nhập mới viết được đánh giá.
											  </div>
									  </div>
								</div>
						@endif

						@foreach($reviews as $review)
							@php
								$user = DB::table('users')->where('id', $review->user_id)->first();
							@endphp
						<div class="comment-product">
							<div class="columns">
								<div class="column is-2">
									@if($user->facebook_id)
									<img src="{{$user->avatar}}" class="avatar">
									@else
										<img src="{{ asset('files/images/'.$user->avatar) }}" class="avatar">
									@endif
								</div>
								<div class="column is-10">
									<h4 style="font-weight: 500;">{{ $user->lastname }} {{ $user->firstname }}</h4>
									<h5 style="font-weight: 300;">{{ $review->created_at->format('d/m/Y') }}</h5>
								</div>
							</div>
							<div class="comment-content">
								{{ $review->review }}
								<br>
							</div>
						</div>
						<hr>
						@if($loop->index > 3)
							@break
						@endif
						@endforeach
						<div class="columns">
							<div class="column is-6">
								<p class="viewallreview title is-4"><a href="#">Xem tất cả đánh giá</a></p>
							</div>
							<div class="column is-6">
								<div class="is-pulled-right">
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
					            	</span>
					            	<span style="font-weight: 500;">&nbsp; {{ $product->review->count() }} &nbsp;Đánh giá</span>
		            	        </div>
							</div>
						</div>
					<hr>

					{{-- content div --}}
					<div class="content-tab">
					</div>
				</div>

				<div class="column is-1"></div>

				<div class="column is-5">
					<div class="columns price-detail">
						<div class="column is-7">
							<h3 class="subtitle"><span style="font-weight: 500;">{{ number_format($product->price,3,'.','.') }} đ &nbsp;</span> (Đã có VAT)</h3>
				            	<div class="reivew">
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
					            	</span>
					            	<span style="font-weight: 500;">&nbsp;{{ $product->review->count() }}&nbsp;Review</span>
		            	        </div>
						</div>
						<div class="column is-5">
							<a href="{{ route('frontend.addtocart', $product->product_id) }}" class="button is-danger is-fullwidth is-pulled-right is-large">
								<h5 class="subtitle" style="color: #fff; font-weight: 500;">Thêm vào giỏ hàng</h5>
							</a>
						</div>
					</div>
					<hr>
					<div class="columns is-mobile">
						{{-- <div class="column is-7"></div> --}}
						<div class="column is-1">
							<svg viewBox="0 0 32 32" role="img" aria-label="facebook" focusable="false" style="display:block;fill:#484848;height:18px;width:18px;" data-reactid="29"><path fill-rule="evenodd" d="M8 14.408v-4.165c0-.424.35-.812.77-.812h2.519V7.347c0-4.84 2.484-7.311 7.42-7.347 1.645 0 3.219.212 4.692.636.455.141.63.424.595.883l-.56 4.062c-.035.178-.14.354-.315.531-.21.105-.42.176-.63.14-.875-.247-1.784-.352-2.799-.352-1.399 0-1.61.283-1.61 1.73v1.8H22.6c.42 0 .805.423.805.883l-.349 4.17c0 .422-.35.705-.77.705H18.08v16c0 .424-.349.812-.769.812h-5.213c-.42 0-.804-.388-.804-.812V15.185h-2.52A.781.781 0 0 1 8 14.408" data-reactid="30"></path></svg>
						</div>
						<div class="column is-1">
							<svg viewBox="0 0 32 32" role="img" aria-label="twitter" focusable="false" style="display:block;fill:#484848;height:18px;width:18px;" data-reactid="33"><path fill-rule="evenodd" d="M31 6.359c-1.16.493-2.32.821-3.546.952 1.293-.755 2.22-1.872 2.718-3.384a13.048 13.048 0 0 1-3.913 1.512c-1.226-1.282-2.75-1.939-4.51-1.939-3.413 0-6.167 2.728-6.167 6.115 0 .493.067.953.166 1.38-4.94-.23-9.513-2.596-12.664-6.378-.563.954-.861 1.972-.861 3.089 0 2.07 1.027 3.914 2.75 5.063-.995-.032-1.922-.295-2.816-.755v.066c0 2.89 2.12 5.424 4.94 5.982-.63.165-1.16.231-1.624.231-.298 0-.696-.033-1.127-.132a6.074 6.074 0 0 0 5.737 4.242c-2.22 1.742-4.775 2.63-7.658 2.63-.563 0-1.06-.034-1.425-.1 2.85 1.841 6 2.76 9.413 2.76 7.294 0 12.83-4.012 15.514-9.302 1.359-2.661 2.021-5.359 2.021-8.086v-.46c-.033-.165-.033-.296-.033-.329A12.663 12.663 0 0 0 31 6.36" data-reactid="34"></path></svg>
						</div>
						<div class="column is-1">
							<svg viewBox="0 0 32 32" role="img" aria-label="email" focusable="false" style="display:block;fill:#484848;height:18px;width:18px;" data-reactid="37"><path fill-rule="evenodd" d="M17.417 18.994c.136-.117.86-.764 2.082-1.859L29.93 25.8H2.17l10.349-8.673c1.24 1.097 1.976 1.741 2.12 1.852.83.651 1.934.63 2.778.015M29.31 8.327l-4.829 4.336c-1.507 1.354-2.796 2.51-3.855 3.46l10.354 8.6c.01.009.014.02.024.029V6.938c0-.04-.019-.073-.023-.111a3.733 3.733 0 0 0-.082.073L29.31 8.327M4.116 7.63a5347.74 5347.74 0 0 0 4.692 4.188c3.943 3.516 6.513 5.793 6.75 5.974a.76.76 0 0 0 .923.03c.21-.183 2.82-2.524 7.005-6.281L28.31 7.21 29.657 6H2.292l.291.26 1.533 1.37m3.659 5.278a4436.652 4436.652 0 0 1-4.658-4.16c-.556-.495-1.071-.956-1.533-1.37l-.57-.51c-.002.025-.014.045-.014.07v17.886l10.384-8.703c-.999-.888-2.197-1.954-3.609-3.213" data-reactid="38"></path></svg>
						</div>
						<div class="column is-1">
							<svg viewBox="0 0 12 4" role="img" aria-label="Plus d'options de partage" focusable="false" style="display:block;fill:#484848;height:18px;width:18px;" data-reactid="41"><path fill-rule="evenodd" d="M10.5 3.5a1.5 1.5 0 1 0-.001-3.001A1.5 1.5 0 0 0 10.5 3.5zM6 3.5A1.5 1.5 0 1 0 5.999.499 1.5 1.5 0 0 0 6 3.5zm-4.5 0A1.5 1.5 0 1 0 1.499.499 1.5 1.5 0 0 0 1.5 3.5z" data-reactid="42"></path></svg>
						</div>
						<div class="column is-1">
							{{-- Thêm vào danh sách yêu thích &nbsp;  --}}
							<svg viewBox="0 0 32 32" style="height:16px;width:16px;" fill="transparent" fill-opacity="1" stroke="#484848" stroke-width="1.5" aria-hidden="true" role="presentation" stroke-linecap="round" stroke-linejoin="round" data-reactid="88"><path d="M23.993 2.75c-.296 0-.597.017-.898.051-1.14.131-2.288.513-3.408 1.136-1.23.682-2.41 1.621-3.688 2.936-1.28-1.316-2.458-2.254-3.687-2.937-1.12-.622-2.268-1.004-3.41-1.135a7.955 7.955 0 0 0-.896-.051C6.123 2.75.75 4.289.75 11.128c0 7.862 12.238 16.334 14.693 17.952a1.004 1.004 0 0 0 1.113 0c2.454-1.618 14.693-10.09 14.693-17.952 0-6.84-5.374-8.378-7.256-8.378" data-reactid="89"></path></svg>
						</div>
					</div>
					<figure class="image-detail image is-1by2" style="border: 1px solid #f1f1f1;">
					  <img src="{!! asset('files/images/'.$product->thumbnail) !!}" alt="Image">
					</figure>
				</div>

			</div>
			<h1 class="title is-3 is-spaced" style="font-weight: 500;">Bạn có thể quan tâm</h1>

			<div class="columns">
			@foreach( $productRelates as $productRelate )
				
				<div class="column is-2">
					<a href="{{ route('frontend.product', $productRelate->slug) }}" target="_blank">
						<div class="card">
					        <div class="card-image">
					            <figure class="image is-1by2">
					              <img src="{{ asset('files/images/'.$productRelate->thumbnail) }}" alt="Image">
					            </figure>
					        </div>
					        <div class="card-content">
					            <div class="content">
					            	<b>{{ number_format($product->price,3,',','.') }} đ &nbsp;</b> 
					            	{{ $productRelate->title }}
					            	<div class="reivew">
						            	<span class="icon is-small" style="color:#0B8584;">
						            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
						            	</span>
						            	<span class="icon is-small" style="color:#0B8584;">
						            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
						            	</span>
						            	<span class="icon is-small" style="color:#0B8584;">
						            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
						            	</span>
						            	<span class="icon is-small" style="color:#0B8584;">
						            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
						            	</span>
						            	<span class="icon is-small" style="color:#0B8584;">
						            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path></svg>
						            	</span>
						            	<span style="font-weight: 500;">&nbsp;123&nbsp;Review</span>
			            	        </div>
					            </div>
					        </div>
				    	</div>
			    	</a>
				</div>
			@endforeach
			</div>

		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#notireview').show().delay(2000).fadeOut();
		});
	</script>
@endsection
