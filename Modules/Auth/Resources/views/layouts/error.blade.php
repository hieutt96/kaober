{{-- hiển thị thông báo lỗi --}}
      @if(count($errors) > 0)
        <ul class="error-message">
        @foreach($errors->all() as $error)
          <p class="help is-danger">{{ $error }}</p>
        @endforeach
        </ul>
        <hr>
      @endif
      {{-- end --}}
