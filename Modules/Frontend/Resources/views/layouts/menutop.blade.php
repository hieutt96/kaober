{{-- menutop --}}
<div class="menutop taptop">
	{{-- has-shadow --}}
	<nav class="nav">
	    <div class="nav-left">
	      <a class="nav-item">
	        <img src="{{ asset("favicon.png") }}" alt="Bulma logo">
	      </a>
	    </div>
	    <span class="nav-toggle">
	      <span></span>
	      <span></span>
	      <span></span>
	    </span>
	    <div class="nav-right nav-menu" id="top1">
	      <a class="nav-item is-tab">Become a Host</a>
	      <a class="nav-item is-tab">Help</a>
	      <a class="nav-item is-tab">Sign Up</a>
	      <a class="nav-item is-tab">Log In</a>
	    </div>
	</nav>

	<nav class="nav has-shadow">
	    <div class="nav-left">
	      <a class="nav-item is-tab is-active" href="{{ url('/') }}">AMAZON</a>
	      <a class="nav-item is-tab" href="{{ url('book') }}">BOOK</a>
	      <a class="nav-item is-tab">SHOES</a>
	      <a class="nav-item is-tab">HITECH</a>
	    </div>
	    {{-- nếu dài có thể thêm để responsive --}}
{{-- 	    <span class="nav-toggle">
	      <span></span>
	      <span></span>
	      <span></span>
	    </span> --}}
	</nav>

</div>
