@extends('version1::master')
@section('title', 'Blog tin tức | Kaober.com')

@section('navtop')
	@include('version1::layouts.nav2')
@endsection


@section('main-content')
	<div class="content top-45">
		<section class="section top">
			<div class="container">
				<div class="columns">
				  <div class="column is-one-third">
				    <p class="subtitle is-6 is-spaced">
				    	<b>
				    		{{ $hotnews->created_at->format('d/m/Y') }} - 
				    		<a href="{{ route('frontend.blog.category', $hotnews->category->slug) }}">{{ $hotnews->category->title }}</a>
				    	</b>
				    </p>
				    <p class="title is-3 is-spaced"><b>
				    	<a href="{{ route('frontend.blog.post', $hotnews->slug) }}" style="color: #000;">
				    		{{ $hotnews->title }}
				    	</a>
				    </b></p>
				    <div class="post-content" style="font-size: 16px;">
				    	{!! str_limit( $hotnews->content, 400 ) !!}
				    </div>
				  </div>
				  <div class="column">
				    <a href="{{ route('frontend.blog.post', $hotnews->slug) }}">
				    	<img src="{{ asset('files/images/'.$hotnews->thumbnail) }}"></a>
				  </div>
				</div>
			</div>
		</section>


		<section class="section">
			<div class="container">
				@foreach( $blogs as $blog )
				@if( $loop->iteration % 3 == 1 )
					<hr><br>
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
					</div>
				@endif
				@endforeach
				@if( $blogs->sum() % 3 != 1 )
					</div>
				@endif
			</div>
		</section>
	</div>

@endsection
{{-- <div class="container is-spaced"><hr></div> --}}
