$(document).ready(function(){
	// bắt sự kiện menu
	var burger = document.querySelector('.nav-toggle');
    var menu = document.querySelector('.nav-menu');
    burger.addEventListener('click', function() {
        burger.classList.toggle('is-active');
        menu.classList.toggle('is-active');
    });

	$("#getlogin").click(function() {
		$('div#signup').addClass('is-active');
	});

	$('#getsignup').on('click', function(){
		$('div#login').addClass('is-active');
	});

	$('.close-popup').click(function() {
		$('.modal').removeClass('is-active');
	});

	// KHI NHẤN VÀO BACKGROUND TRONG MODAL SẼ TỰ TẮT
	$('.modal-background').click(function(){
		$('html').removeClass('is-clipped');
    	$(this).parent().removeClass('is-active');
	});

	// KHI NHẤN VÀO esc SẼ TỰ TẮT
	$(document).on('keyup',function(e) {
	    if (e.keyCode == 27) {
	      $('html').removeClass('is-clipped');
	      $('.modal').removeClass('is-active');
	    }
	  });

	// register
	$('#registeraccount').on('click', function(){
		$('div#register').addClass('is-active');
		$('div#signup').removeClass('is-active');
		$('div#login').removeClass('is-active');
	});

	// reset password
	$('#resetpassword').on('click', function(){
		$('div#password').addClass('is-active');
		$('div#signup').removeClass('is-active');
	});

	// back to login
	$('#backtologin').on('click', function(){
		$('div#signup').addClass('is-active');
		$('div#password').removeClass('is-active');
	});

	$('#signupget').on('click', function(){
		$('div#login').addClass('is-active');
		$('div#signup').removeClass('is-active');
	});

	$('#loginget').on('click', function(){
		$('div#signup').addClass('is-active');
		$('div#login').removeClass('is-active');
	});

	$('#registerlogin').on('click', function(){
		$('div#signup').addClass('is-active');
		$('div#register').removeClass('is-active');
	});

	$('#writereview').on('click', function() {
		$('#modal-review').addClass('is-active');
	});


	/*
	 * FILTER HOME
	*/
	$('#categoriesbook').on('click', function(){
		$('#filter1').addClass('is-active');
	});

	$('.qtyproduct').change(function() {
	    rowid = $(this).attr('id');
	    qty = $(this).val();
	    token = $("input[name='_token']").val();
	    // alert(token);
	    $.ajax({
	    	url: 'cart/update/'+rowid+'/'+qty,
	    	headers: {'X-CSRF-TOKEN': token},
	    	type: 'POST',
	    	data: { 'id':rowid, 'qty':qty },
	    	success: function(data) {
	    		if(data=='kaober') {
	    			window.location = window.location.href;
	    		}
	    	},
	    	error: function (e) {
	    		window.location = window.location.href;
	    	}
	    });
	});

	$('.viewallreview').on('click', function() {
			$('#modalreview').addClass('is-active');
	});

});