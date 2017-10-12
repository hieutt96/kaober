$(document).ready(function(){
	$('.nav-toggle').on('click', function(){
		var nav = document.getElementById("nav-menu");
		var className = nav.getAttribute("class");
		if(className == "nav-right nav-menu") {
		    nav.className = "nav-right nav-menu is-active";
		} else {
		    nav.className = "nav-right nav-menu";
		}
	});
});