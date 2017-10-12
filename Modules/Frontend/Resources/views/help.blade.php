<!DOCTYPE html>
<html>
<head>
  <title>Help center</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  @include('frontend::includes.css')
  @include('frontend::includes.js')
</head>
<body>

  <style type="text/css">
    .help-center-search {
      font-size: 2.0rem !important;
      /*width: 70%;*/
    }
    .circle-help {
        display:block;
        height: 100px;
        width: 100px;
        border-radius: 50%;
        border: 1px solid #afadad;
        background-color: #fff;
    }

    .div-help {
      width: 60%;
    }
  </style>

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

  <section class="hero is-primary is-medium" style="background-color: #0c8584;">
    <div class="hero-body">
      <div class="container has-text-centered div-help">
        <h1 class="title">
          How can we help?
        </h1>

        <div class="field">
          <p class="control has-icons-left">
            <input class="help-center-search input is-large" type="text" placeholder="">
            <span class="icon is-small is-left">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="display:block;fill:#767676;height:25px;width:25px; margin-top: 20px;" data-reactid="5"><path fill-rule="evenodd" d="M23.53 22.47l-6.807-6.808A9.455 9.455 0 0 0 19 9.5 9.5 9.5 0 1 0 9.5 19c2.353 0 4.502-.86 6.162-2.277l6.808 6.807a.75.75 0 0 0 1.06-1.06zM9.5 17.5a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" data-reactid="6"></path></svg>
            </span>
          </p>
        </div>

      </div>
    </div>
  </section>

  <section class="hero is-light">
    <div class="hero-body">
      <div class="container">
        <div class="columns">
          <div class="column is-1">
            <div class="circle-help">
                
            </div>
          </div>
          <div class="column is-1">
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
          <a class="nav-item">
            Help Center  &nbsp; / &nbsp; Home
          </a>
        </div>
    </div>
  </nav>

  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <a class="icon" href="https://github.com/jgthms/bulma">
           Footer
          </a>
        </p>
      </div>
    </div>
  </footer>

</body>
</html>
