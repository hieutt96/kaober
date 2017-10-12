{{-- hiển thị thông báo lỗi --}}
      @if(count($errors) > 0)

          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            @foreach($errors->all() as $error)
            <h5>{{ $error }}</h5>
             @endforeach
          </div>

      @endif
      {{-- end --}}
