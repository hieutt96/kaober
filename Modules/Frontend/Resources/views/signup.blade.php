<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	 @include('frontend::includes.css')
	 @include('frontend::includes.js')

	 <style type="text/css">
	 	.modal-resize {
	 		width: 550px;
	 	}
	 	
	 </style>

</head>
<body>
	<button class="button is-success" id="getsignup">signup</button>

	{{-- sign up --}}
	<div class="modal signup" id="signup">
	  	<div class="modal-background"></div>
	  <div class="modal-resize modal-content">
	  		<div class="modal-card-body">
	  			<a><svg class="close-popup" viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(118, 118, 118); height: 16px; width: 16px;">
	  				<path fill-rule="evenodd" d="M23.25 24a.74.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28"></path>
	  			</svg></a><br>
	      		<div class="block">
	      			<button class="button is-info is-large is-fullwidth" style="background-color: #4568b2;">
	      				<svg viewBox="0 0 32 32" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: rgb(255, 255, 255); height: 18px; width: 18px;"><path fill-rule="evenodd" d="M8 14.408v-4.165c0-.424.35-.812.77-.812h2.519V7.347c0-4.84 2.484-7.311 7.42-7.347 1.645 0 3.219.212 4.692.636.455.141.63.424.595.883l-.56 4.062c-.035.178-.14.354-.315.531-.21.105-.42.176-.63.14-.875-.247-1.784-.352-2.799-.352-1.399 0-1.61.283-1.61 1.73v1.8H22.6c.42 0 .805.423.805.883l-.349 4.17c0 .422-.35.705-.77.705H18.08v16c0 .424-.349.812-.769.812h-5.213c-.42 0-.804-.388-.804-.812V15.185h-2.52A.781.781 0 0 1 8 14.408"></path></svg>&nbsp; Log in with Facebook
	      			</button>
	      		</div>
	      		<div class="block">
	      			<button class="button is-outlined is-large is-fullwidth is-active">
	      				<svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: rgb(72, 72, 72); height: 18px; width: 18px;"><g fill="none" fill-rule="evenodd"><path d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z" fill="#EA4335"></path><path d="M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z" fill="#4285F4"></path><path d="M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z" fill="#FBBC05"></path><path d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z" fill="#34A853"></path><path d="M0 0h18v18H0V0z"></path></g></svg>&nbsp; Log in with Google
	      			</button>
	      		</div>
	      		
	          <div class="columns">
	            <div class="column is-5">
	              <hr>
	            </div>
	            <div class="column is-2 has-text-centered" style="padding-top: 20px;">
	              or
	            </div>
	            <div class="column is-5">
	              <hr>
	            </div>
	          </div>

	          <div class="field">
	            <p class="control">
	              <input class="input" type="email" placeholder="Email">
	            </p>
	          </div>

	          <div class="field">
	            <p class="control">
	              <input class="input" type="password" placeholder="Password">
	            </p>
	          </div>
	          	<div class="columns">
	          		<div class="column is-8">
		          		<div class="field">
		          		  <p class="control">
		          		    <label class="checkbox">
		          		      <input type="checkbox">
		          		      	<span  class="subtitle is-5">Remember me</span>
		          		    </label>
		          		  </p>
		          		</div>
		          	</div>
	          		<div class="column is-4">
	          			<p class="subtitle is-5" style="float: right;"><a>Forgot password?</a></p>
	          		</div>
	          	</div>
	          		

	          <div class="is-clearfix"></div>

	          <div class="block">
	          		<button class="button is-danger is-large is-fullwidth" style="background-color: #ff5a5f;"> Log in
	          		</button>
	          </div>

	          <hr>

	      		<div class="columns">
	      			<div class="column is-9">
	      				<p class="title is-5 is-spaced">Don't have account?</p>
	      			</div>
	      			<div class="column is-3">
	      				<button class="button is-primary is-outlined" style="float: right">Sign up</button>
	      			</div>
	      		</div>
	  		</div>
		</div>
	</div>


	<script type="text/javascript">
		$(document).ready(function() {
			$('.close-popup').click(function() {
				$('.modal').removeClass('is-active');
			});

			$('.modal').bind( "clickoutside", function(event){
				$(this).removeClass('is-active');
			});

			$('#getsignup').click(function(){
				$('#signup').addClass('is-active');
			});

		});
	</script>

</body>
</html>