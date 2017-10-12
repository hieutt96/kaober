@extends('version1::master')
@section('title', 'Blog tin tức | Kaober.com')

@section('navtop')
	@include('version1::layouts.nav2')
@endsection


@section('main-content')
	<div class="content top-45">

		<section class="section">
			<div class="container">
			
				<h1 class="title is-2 is-spaced"><b>{{ $category->title }}</b></h1>

				@foreach( $blogs as $blog )
				@if( $loop->iteration % 3 == 1 )
					<br>
					<div class="columns">
				@endif			
					  <div class="column is-4">
					    <div class="card">
						      <div class="card-image">
						        <figure class="image is-4by3">
						          <a href="{{ route('frontend.blog.post', $blog->slug) }}" style="color: #000;">
						          		<img src="{{ asset('files/images/'.$blog->thumbnail) }}" alt="{{ $blog->title }}">
						          	</a>
						        </figure>
						      </div>
						      <div class="card-content">
							        <p class="subtitle is-4 is-spaced" style="padding-top: 15px;">
							        	<b>
							        		<a href="{{ route('frontend.blog.post', $blog->slug) }}" style="color: #000;">
							        			{{ $blog->title }}
							        		</a>
							        	</b>
							        </p>

							        <div class="content post-content" style="font-size: 16px;">
							          {!! str_limit( $blog->content, 200 ) !!}
							        </div>
						      </div>
					    </div>
					  </div>
				@if( $loop->iteration % 3 == 0 )
					</div><hr>
				@endif
				@endforeach
				@if( $blogs->sum() % 3 != 1 )
					</div><hr>
				@endif
			</div>
		</section>
	</div>

@endsection
{{-- <div class="container is-spaced"><hr></div> --}}
