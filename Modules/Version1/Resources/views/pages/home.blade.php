@extends('version1::master')
@section('title', 'Trang chủ')

@section('navtop')
	@include('version1::includes.notisuccess')
	@include('version1::layouts.navhome')
	@include('version1::layouts.tab')
	@include('version1::layouts.filter')
@endsection

@section('main-content')
	<div class="product-home container">
		<div class="columns">
			<div class="column"><p class="title is-4 has-text-leftt"><b>Sách bán chạy</b></p></div>
			<div class="column">
				<p class="title is-6 has-text-right"><a>
				Xem tất cả 
				<svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;"><path fill-rule="evenodd" d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z"></path></svg></a>
				</p>
			</div>
		</div>
		<div class="is-clearfix"></div>
		@foreach( $products as $product )
			@if( $loop->iteration % 6 == 1 )
				<div class="columns">
			@endif

			<div class="column is-2">
		  		<a href="{{ route('frontend.product', $product->slug) }}" target="_blank">
			  		<div class="card">
				        <div class="card-image">
				            <figure class="image is-1by2">
				              <img src="{!! asset('files/images/'.$product->thumbnail) !!}" alt="Image">
				            </figure>
				        </div>
				        <div class="card-content">
				            <div class="content">
				            	<b>{{ number_format($product->price,3,'.','.') }} đ &nbsp;</b> 
				            	 <span style="font-weight: 300; font-size: 15px;">{{ $product->title }}</span>
								<div class="review">
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
					            		</svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
					            		</svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
					            		</svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
					            		</svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
					            		</svg>
					            	</span>
					            	<span style="font-weight: 400; font-size: 12px;"> {{ $product->review->count() }} Đánh giá </span>
		            	        </div>
				            </div>
				        </div>
				    </div>
			    </a>
			</div>

			@if( $loop->iteration % 6 == 0 )
				</div>
			@endif
		@endforeach
		@if( $products->sum() % 6 != 1 )
			</div>
		@endif
	</div>

	<div class="product-home container">
		<div class="columns">
			<div class="column"><p class="title is-4 has-text-leftt"><b>Bạn có thể thích</b></p></div>
			<div class="column">
				<p class="title is-6 has-text-right"><a>
				Xem tất cả 
				<svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;"><path fill-rule="evenodd" d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z"></path></svg></a>
				</p>
			</div>
		</div>
		<div class="is-clearfix"></div>
		@foreach( $products as $product )
			@if( $loop->iteration % 6 == 1 )
				<div class="columns">
			@endif

			<div class="column is-2">
		  		<a href="{{ route('frontend.product', $product->slug) }}" target="_blank">
			  		<div class="card">
				        <div class="card-image">
				            <figure class="image is-1by2">
				              <img src="{!! asset('files/images/'.$product->thumbnail) !!}" alt="Image">
				            </figure>
				        </div>
				        <div class="card-content">
				            <div class="content">
				            	<b>{{ number_format($product->price,3,'.','.') }} đ &nbsp;</b> 
				            	 <span style="font-weight: 300; font-size: 15px;">{{ $product->title }}</span>
								<div class="review">
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
					            		</svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
					            		</svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
					            		</svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
					            		</svg>
					            	</span>
					            	<span class="icon is-small" style="color:#0B8584;">
					            		<svg viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 1em; width: 1em;"><path d="M971.5 379.5c9 28 2 50-20 67L725.4 618.6l87 280.1c11 39-18 75-54 75-12 0-23-4-33-12l-226.1-172-226.1 172.1c-25 17-59 12-78-12-12-16-15-33-8-51l86-278.1L46.1 446.5c-21-17-28-39-19-67 8-24 29-40 52-40h280.1l87-278.1c7-23 28-39 52-39 25 0 47 17 54 41l87 276.1h280.1c23.2 0 44.2 16 52.2 40z"></path>
					            		</svg>
					            	</span>
					            	<span style="font-weight: 400; font-size: 12px;"> {{ $product->review->count() }} Đánh giá </span>
		            	        </div>
				            </div>
				        </div>
				    </div>
			    </a>
			</div>

			@if( $loop->iteration % 6 == 0 )
				</div>
			@endif
		@endforeach
		@if( $products->sum() % 6 != 1 )
			</div>
		@endif
	</div>
	{{-- phân trang --}}
{{-- 	<div class="container has-text-centered">
		{{ $products->links() }}
	</div> --}}
	{{-- lọc theo danh mục sản phẩm --}}
	@include('version1::layouts.modalfilter1')

	<script type="text/javascript">
		$(document).ready(function() {
			$('#notireview').show().delay(5000).fadeOut();
		});
	</script>
	
@endsection
