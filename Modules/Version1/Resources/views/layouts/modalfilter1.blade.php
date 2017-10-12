<div class="modal" id="filter1">
    <div class="modal-background"></div>
    <div class="modal-card">
      <form method="GET" action="{{ route('frontend.filter.product') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <section class="modal-card-body" id="body-filter1">
              @php
                $cates = DB::table('shop_categories')->get();
              @endphp
              @foreach( $cates as $cate )
                <div class="field">
                  <p class="control">
                    <label class="checkbox">
                      <input type="checkbox" id="{{ $cate->cate_id }}" name="filtersearch[]" value="{{ $cate->cate_id }}">
                        {{ $cate->title }}
                    </label>
                  </p>
                </div>
                @endforeach
                <button class="close-popup button">Hủy bỏ</button>
                <button type="submit" class="button is-primary is-pulled-right">Áp dụng</button>
          </section>
      </form>
    </div>
</div>