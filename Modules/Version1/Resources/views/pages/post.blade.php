@extends('version1::master')
@section('title')
{{ $blog->title }} | Blog | Kaober.com
@endsection

@section('navtop')
	@include('version1::layouts.nav2')

	<div class="image-background">
		<img class="thumbnail-blog" src="{{ asset('files/images/'.$blog->thumbnail) }}">
	</div>

@endsection


@section('main-content')

	<div class="container">
		<article class="main-post" style="display: block;">
			<p class="subtitle is-6 is-spaced">
				<b>
					 BY <a href="#" style="color: #000;">KAOBER</a> {{ $blog->created_at->format('d/m/Y') }} - 
					<a href="{{ route('frontend.blog.category', $blog->category->slug) }}">{{ $blog->category->title }}</a>
				</b>
			</p>
			<h1 class="post-title title is-1 is-spaced">{{ $blog->title }}</h1>

			<div class="block share-social">
				<a href="#" class="button">
					<svg viewBox="0 0 32 32" role="img" aria-label="facebook" focusable="false" style="display:block;fill:#484848;height:18px;width:18px;" data-reactid="51"><path fill-rule="evenodd" d="M8 14.408v-4.165c0-.424.35-.812.77-.812h2.519V7.347c0-4.84 2.484-7.311 7.42-7.347 1.645 0 3.219.212 4.692.636.455.141.63.424.595.883l-.56 4.062c-.035.178-.14.354-.315.531-.21.105-.42.176-.63.14-.875-.247-1.784-.352-2.799-.352-1.399 0-1.61.283-1.61 1.73v1.8H22.6c.42 0 .805.423.805.883l-.349 4.17c0 .422-.35.705-.77.705H18.08v16c0 .424-.349.812-.769.812h-5.213c-.42 0-.804-.388-.804-.812V15.185h-2.52A.781.781 0 0 1 8 14.408" data-reactid="52"></path>
					</svg>
				</a>
				<a href="#" class="button">
					<svg viewBox="0 0 32 32" role="img" aria-label="twitter" focusable="false" style="display:block;fill:#484848;height:18px;width:18px;" data-reactid="55"><path fill-rule="evenodd" d="M31 6.359c-1.16.493-2.32.821-3.546.952 1.293-.755 2.22-1.872 2.718-3.384a13.048 13.048 0 0 1-3.913 1.512c-1.226-1.282-2.75-1.939-4.51-1.939-3.413 0-6.167 2.728-6.167 6.115 0 .493.067.953.166 1.38-4.94-.23-9.513-2.596-12.664-6.378-.563.954-.861 1.972-.861 3.089 0 2.07 1.027 3.914 2.75 5.063-.995-.032-1.922-.295-2.816-.755v.066c0 2.89 2.12 5.424 4.94 5.982-.63.165-1.16.231-1.624.231-.298 0-.696-.033-1.127-.132a6.074 6.074 0 0 0 5.737 4.242c-2.22 1.742-4.775 2.63-7.658 2.63-.563 0-1.06-.034-1.425-.1 2.85 1.841 6 2.76 9.413 2.76 7.294 0 12.83-4.012 15.514-9.302 1.359-2.661 2.021-5.359 2.021-8.086v-.46c-.033-.165-.033-.296-.033-.329A12.663 12.663 0 0 0 31 6.36" data-reactid="56"></path>
					</svg>
				</a>
			</div>

			<div class="post-content">
				{!! $blog->content !!}
			</div>

			{{-- <p class="subtitle is-5 is-spaced" style="margin-top: 40px; font-weight: 400;">Từ khóa: </p>
			<span class="tag is-light">{!! $blog->meta_description !!}</span>
			<span class="tag is-light">{!! $blog->meta_keyword !!}</span> --}}

			<div class="sub-email" style="margin-top: 40px;">
			<p class="subtitle is-5 is-spaced" style="font-weight: 400;">Đăng ký nhận bài viết mới: </p>
				@include('version1::layouts.formemail')
			</div>

		</article>
	</div>

@endsection