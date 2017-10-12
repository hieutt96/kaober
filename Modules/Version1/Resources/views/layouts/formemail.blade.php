
<form method="POST" action="{{ route('frontend.blog.sendmail') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="columns">
        <div class="column is-10">
          <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input id="email" name="email" class="input is-primary" type="email" placeholder="Địa chỉ Email của bạn" required>
              <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
              </span>
            </p>
          </div>
        </div>
        <div class="column is-2">
          <button class="button is-primary is-outlined">Đăng ký</button>
        </div>
    </div>
</form>