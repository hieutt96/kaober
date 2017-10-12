@extends('frontend::master')

@section('content')

	@include('frontend::layouts.slider')

	<nav class="nav has-shadow">
	  <div class="nav-left">
	    <a class="nav-item">
	      <i class="fa fa-align-justify title is-5"></i>&nbsp; Filter
	    </a>
	  </div>

	  <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
	  <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
	  <span class="nav-toggle">
	    <span></span>
	    <span></span>
	    <span></span>
	  </span>

	  <!-- This "nav-menu" is hidden on mobile -->
	  <!-- Add the modifier "is-active" to display it on mobile -->
	  <div class="nav-right nav-menu">
	    <a class="nav-item">
	      Sort By: &nbsp;
	      	    <span class="select is-small">
	      	      <select>
	      	        <option>Featured</option>
	      	        <option>price</option>
	      	      </select>
	      	    </span>
	    </a>
	  </div>
	</nav>

	<div class="category-product">
		<div class="columns is-gapless">
			<div class="column is-2">
				<nav class="panel">
				  <a class="panel-block">
				    product category
				  </a>
				  <a class="panel-block">
				    product category
				  </a>
				  <a class="panel-block">
				    product category
				  </a>
				  <a class="panel-block">
				    product category
				  </a>
				  <a class="panel-block">
				    product category
				  </a>
				</nav>
			</div>

		    <div class="column is-10">
		    	{{--  is-gapless --}}
		    	<div class="columns">
				    <div class="column is-4">
				  		<div class="card">
		  		          <div class="card-image">
		  		            <figure class="image is-3by4">
		  		              <img src="{{ asset('files/images/demo.jpg') }}" alt="Image">
		  		            </figure>
		  		          </div>
		  		          <div class="card-content">
		  		            <div class="panel-block-item">
		  		              <span class="likes">
		  		                <span class="icon">
		  		                  <i class="fa fa-heart"></i>
		  		                </span>
		  		                303k Likes
		  		              </span>
		  		              <span class="comments">
		  		                <span class="icon">
		  		                  <i class="fa fa-comment"></i>
		  		                </span>
		  		                12k Comments
		  		              </span>
		  		            </div>
		  		          </div>
		  		        </div>
				    </div>

				    <div class="column is-4">
				  		<div class="card">
		  		          <div class="card-image">
		  		            <figure class="image is-3by4">
		  		              <img src="{{ asset('files/images/demo.jpg') }}" alt="Image">
		  		            </figure>
		  		          </div>
		  		          <div class="card-content">
		  		            <div class="panel-block-item">
		  		              <span class="likes">
		  		                <span class="icon">
		  		                  <i class="fa fa-heart"></i>
		  		                </span>
		  		                303k Likes
		  		              </span>
		  		              <span class="comments">
		  		                <span class="icon">
		  		                  <i class="fa fa-comment"></i>
		  		                </span>
		  		                12k Comments
		  		              </span>
		  		            </div>
		  		          </div>
		  		        </div>
				    </div>

				    <div class="column is-4">
				  		<div class="card">
		  		          <div class="card-image">
		  		            <figure class="image is-3by4">
		  		              <img src="{{ asset('files/images/demo.jpg') }}" alt="Image">
		  		            </figure>
		  		          </div>
		  		          <div class="card-content">
		  		            <div class="panel-block-item">
		  		              <span class="likes">
		  		                <span class="icon">
		  		                  <i class="fa fa-heart"></i>
		  		                </span>
		  		                303k Likes
		  		              </span>
		  		              <span class="comments">
		  		                <span class="icon">
		  		                  <i class="fa fa-comment"></i>
		  		                </span>
		  		                12k Comments
		  		              </span>
		  		            </div>
		  		          </div>
		  		        </div>
				    </div>
		    	</div>

    	    	<div class="columns">
    			    <div class="column is-4">
    			  		<div class="card">
    	  		          <div class="card-image">
    	  		            <figure class="image is-3by4">
    	  		              <img src="{{ asset('files/images/demo.jpg') }}" alt="Image">
    	  		            </figure>
    	  		          </div>
    	  		          <div class="card-content">
    	  		            <div class="panel-block-item">
    	  		              <span class="likes">
    	  		                <span class="icon">
    	  		                  <i class="fa fa-heart"></i>
    	  		                </span>
    	  		                303k Likes
    	  		              </span>
    	  		              <span class="comments">
    	  		                <span class="icon">
    	  		                  <i class="fa fa-comment"></i>
    	  		                </span>
    	  		                12k Comments
    	  		              </span>
    	  		            </div>
    	  		          </div>
    	  		        </div>
    			    </div>

    			    <div class="column is-4">
    			  		<div class="card">
    	  		          <div class="card-image">
    	  		            <figure class="image is-3by4">
    	  		              <img src="{{ asset('files/images/demo.jpg') }}" alt="Image">
    	  		            </figure>
    	  		          </div>
    	  		          <div class="card-content">
    	  		            <div class="panel-block-item">
    	  		              <span class="likes">
    	  		                <span class="icon">
    	  		                  <i class="fa fa-heart"></i>
    	  		                </span>
    	  		                303k Likes
    	  		              </span>
    	  		              <span class="comments">
    	  		                <span class="icon">
    	  		                  <i class="fa fa-comment"></i>
    	  		                </span>
    	  		                12k Comments
    	  		              </span>
    	  		            </div>
    	  		          </div>
    	  		        </div>
    			    </div>

    			    <div class="column is-4">
    			  		<div class="card">
    	  		          <div class="card-image">
    	  		            <figure class="image is-3by4">
    	  		              <img src="{{ asset('files/images/demo.jpg') }}" alt="Image">
    	  		            </figure>
    	  		          </div>
    	  		          <div class="card-content">
    	  		            <div class="panel-block-item">
    	  		              <span class="likes">
    	  		                <span class="icon">
    	  		                  <i class="fa fa-heart"></i>
    	  		                </span>
    	  		                303k Likes
    	  		              </span>
    	  		              <span class="comments">
    	  		                <span class="icon">
    	  		                  <i class="fa fa-comment"></i>
    	  		                </span>
    	  		                12k Comments
    	  		              </span>
    	  		            </div>
    	  		          </div>
    	  		        </div>
    			    </div>
    	    	</div>
		    </div>
		</div>
		<div class="pagination-home">
			<nav class="pagination is-centered">
			  <ul class="pagination-list">
			    <li>
			      <a class="pagination-link is-current">1</a>
			    </li>
			    <li>
			      <a class="pagination-link">2</a>
			    </li>
			    <li>
			      <a class="pagination-link">3</a>
			    </li>
			  </ul>
			</nav>
		</div>
	</div>

@endsection
