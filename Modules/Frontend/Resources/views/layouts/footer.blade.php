
<hr>
{{-- footer --}}
<footer class="">
  <div class="container">

    <div class="columns">
  	  <div class="column is-3">
  	    <div class="field">
          <p class="control">
            <span class="select">
              <select>
                <option>English</option>
                <option>Vietnam</option>
              </select>
            </span>
          </p>
        </div>
        <div class="field">
          <p class="control">
            <span class="select">
              <select>
                <option>USD</option>
                <option>VND</option>
              </select>
            </span>
          </p>
        </div>

  	  </div>
  	  <div class="column is-3">
  	    Second column
  	  </div>
  	  <div class="column is-3">
  	    Third column
  	  </div>
  	  <div class="column is-3">
  	    Fourth column
  	  </div>
  	</div>

    <hr>

    <nav class="nav">
      <div class="nav-left">
        <a class="nav-item">
          <img src="{{ asset('frontend/img/logo.png') }}" alt="Bulma logo">
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
          <span class="icon">
            <i class="fa fa-facebook"></i>
          </span>
        </a>
        <a class="nav-item">
          <span class="icon">
            <i class="fa fa-twitter"></i>
          </span>
        </a>
        <a class="nav-item">
          <span class="icon">
            <i class="fa fa-instagram"></i>
          </span>
        </a>
      </div>
    </nav>

  </div>
</footer>