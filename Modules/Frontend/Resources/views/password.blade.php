<!DOCTYPE html>
<html>
<head>
	<title>password</title>
	 @include('frontend::includes.css')
	 @include('frontend::includes.js')

	 <style type="text/css">
	 	.modal-resize {
	 		max-width: 550px;
	 	}
	 	
	 </style>

</head>
<body>
	<button class="button is-success" id="resetpassword">resetpassword</button>

	{{-- sign up --}}
	<div class="modal" id="password">
	  	<div class="modal-background"></div>
	  <div class="modal-resize modal-content">
	  		<div class="modal-card-body">
	  			<a><svg class="close-popup" viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(118, 118, 118); height: 16px; width: 16px;">
	  				<path fill-rule="evenodd" d="M23.25 24a.74.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28"></path>
	  			</svg></a><br>
	  			<p class="title is-3"><b>Reset Password</b></p>

	  			<hr width="10%">
	  			<p class="title is-5">Enter the email address associated with your account, and we’ll email you a link to reset your password.</p>

  				<div class="field">
  				  <p class="control">
  				    <div>
  				    	<input class="input" type="email" placeholder="Email">
  				    </div>
  				  </p>
  				</div>

  				<div class="columns">
  					<div class="column is-4">
  						<p class="title is-5" style="margin-top: 15px;"><a><b>Back to Login</b></a></p>
  					</div>
  					<div class="column is-3"></div>
  					<div class="column is-5">
  						<button class="button is-danger is-large is-fullwidth" style="background-color: #ff5a5f; ">
  							<p class="subtitle is-5" style="color: #fff;"><b>Send Reset Link</b></p>
  						</button>
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

			$('#resetpassword').click(function(){
				$('#password').addClass('is-active');
			});

		});
	</script>

</body>
</html>