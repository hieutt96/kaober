
<hr>
<footer class="section">
  <div class="container">

    <div class="columns">
  	  <div class="column is-3">
  	    <div class="field" style="width: 70%">
          <p class="control">
            <span class="select is-fullwidth">
              <select id="locale" name="locale">
                <option value="vi" lang="vi" {{ App::getLocale() == 'vi' ? 'selected' : '' }}>Việt Nam</option>
                {{-- <option value="en" lang="en" {{ App::getLocale() == 'en' ? 'selected' : '' }}>English</option> --}}
              </select>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </span>
          </p>
        </div>
        <div class="field" style="width: 70%">
          <p class="control">
            <span class="select is-fullwidth">
              <select>
                <option>VND</option>
                {{-- <option>USD</option> --}}
              </select>
            </span>
          </p>
        </div>
  	  </div>
  	  <div class="column is-3 is-pulled-left">
  	     <p class="title is-6 is-spaced"><b>Kaober.com</b></p>
         <p><a href="#">Về chúng tôi</a></p>
         <p><a href="#">Thông tin tuyển dụng</a></p>
         <p><a href="{{ route('frontend.blog') }}">Tin tức blog</a></p>
  	  </div>
  	  <div class="column is-3 is-pulled-left">
  	    <p class="title is-6 is-spaced"><b>Trung tâm hỗ trợ</b></p>
        <p><a href="{{ route('frontend.help') }}">Các câu hỏi thường gặp</a></p>
        <p><a href="#">Tài liệu hướng dẫn</a></p>
        <p><a href="#">Hướng dẫn thanh toán nhanh</a></p>
  	  </div>
  	  <div class="column is-3 is-pulled-left">
  	    <p class="title is-6 is-spaced"><b>Các đối tác chính</b></p>
        <p><a href="#">Đối tác thanh toán</a></p>
        <p><a href="#">Các nhà đầu tư</a></p>
        <p><a href="#">Các nhà cung cấp sản phẩm</a></p>
  	  </div>
  	</div>

    <hr>

    <nav class="nav  is-mobile">
      <div class="nav-left">
        <a class="nav-item" href="{{ route('frontend.home') }}">
          <img src="{{ asset('logo.png') }}" alt="Bulma logo"> © Kaober, Jsc.
        </a>
      </div>

      <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>


      <div class="nav-right nav-menu">
        <a class="nav-item">
          Điều khoản
        </a>
        <a class="nav-item">
          Chính sách
        </a>
        <a class="nav-item">
          Site map
        </a>
        <a class="nav-item">
          <span class="icon">
            <svg viewBox="0 0 32 32" role="img" aria-label="Facebook" focusable="false" style="display: block; fill: rgb(118, 118, 118); height: 1em; width: 1em;"><path fill-rule="evenodd" d="M8 14.408v-4.165c0-.424.35-.812.77-.812h2.519V7.347c0-4.84 2.484-7.311 7.42-7.347 1.645 0 3.219.212 4.692.636.455.141.63.424.595.883l-.56 4.062c-.035.178-.14.354-.315.531-.21.105-.42.176-.63.14-.875-.247-1.784-.352-2.799-.352-1.399 0-1.61.283-1.61 1.73v1.8H22.6c.42 0 .805.423.805.883l-.349 4.17c0 .422-.35.705-.77.705H18.08v16c0 .424-.349.812-.769.812h-5.213c-.42 0-.804-.388-.804-.812V15.185h-2.52A.781.781 0 0 1 8 14.408"></path></svg>
          </span>
        </a>
        <a class="nav-item">
          <span class="icon">
            <svg viewBox="0 0 32 32" role="img" aria-label="Twitter" focusable="false" style="display: block; fill: rgb(118, 118, 118); height: 1em; width: 1em;"><path fill-rule="evenodd" d="M31 6.359c-1.16.493-2.32.821-3.546.952 1.293-.755 2.22-1.872 2.718-3.384a13.048 13.048 0 0 1-3.913 1.512c-1.226-1.282-2.75-1.939-4.51-1.939-3.413 0-6.167 2.728-6.167 6.115 0 .493.067.953.166 1.38-4.94-.23-9.513-2.596-12.664-6.378-.563.954-.861 1.972-.861 3.089 0 2.07 1.027 3.914 2.75 5.063-.995-.032-1.922-.295-2.816-.755v.066c0 2.89 2.12 5.424 4.94 5.982-.63.165-1.16.231-1.624.231-.298 0-.696-.033-1.127-.132a6.074 6.074 0 0 0 5.737 4.242c-2.22 1.742-4.775 2.63-7.658 2.63-.563 0-1.06-.034-1.425-.1 2.85 1.841 6 2.76 9.413 2.76 7.294 0 12.83-4.012 15.514-9.302 1.359-2.661 2.021-5.359 2.021-8.086v-.46c-.033-.165-.033-.296-.033-.329A12.663 12.663 0 0 0 31 6.36"></path></svg>
          </span>
        </a>
        <a class="nav-item">
          <span class="icon">
            <svg viewBox="0 0 24 24" role="img" aria-label="Instagram" focusable="false" style="display: block; fill: rgb(118, 118, 118); height: 1em; width: 1em;"><path d="M23.094.906C22.489.301 21.767 0 20.922 0H3.078C2.233 0 1.511.301.906.906.301 1.511 0 2.233 0 3.078v17.844c0 .845.301 1.567.906 2.172.605.605 1.327.906 2.172.906h17.844c.845 0 1.567-.301 2.172-.906.605-.605.906-1.327.906-2.172V3.078c0-.845-.301-1.567-.906-2.172zM8.618 8.65c.943-.911 2.077-1.367 3.4-1.367 1.331 0 2.47.456 3.413 1.367.943.91 1.413 2.013 1.413 3.303 0 1.291-.473 2.393-1.413 3.304-.943.911-2.082 1.367-3.414 1.367-1.322 0-2.456-.456-3.399-1.367-.943-.91-1.413-2.013-1.413-3.304 0-1.29.47-2.392 1.413-3.303zm12.664 11.632c0 .27-.093.498-.277.681a.923.923 0 0 1-.671.275H3.632a.927.927 0 0 1-.681-.275.921.921 0 0 1-.274-.68V10.155H4.88a6.737 6.737 0 0 0-.314 2.047c0 2.001.73 3.708 2.187 5.119 1.457 1.413 3.213 2.118 5.266 2.118a7.5 7.5 0 0 0 3.749-.97 7.288 7.288 0 0 0 2.718-2.632 6.93 6.93 0 0 0 1-3.632c0-.708-.106-1.391-.314-2.048h2.109v10.124zm0-13.954c0 .301-.106.559-.314.767a1.046 1.046 0 0 1-.766.313h-2.719c-.303 0-.558-.105-.766-.313a1.046 1.046 0 0 1-.314-.767V3.75c0-.291.106-.543.314-.756.208-.213.465-.321.766-.321h2.719c.303 0 .558.108.766.32.208.214.314.466.314.757v2.58z" fill-rule="evenodd"></path></svg>
          </span>
        </a>
      </div>
    </nav>

  </div>
</footer>


<script type="text/javascript">
  $(document).ready(function() {
    $("#locale").change(function() {
      var locale = $(this).val();
      var _token = $("input[name=_token]").val();


      $.ajax({
        url: '{{ route("language.selector") }}',
        type: 'POST',
        data: { locale: locale, _token: _token },
        dataType: 'json',
        success: function (data) {

        },
        error: function (data) {
          alert("error!!!!");
        },
        complete: function (data) {
          window.location.reload(true);
        }
      });

    });
  });
</script>