<div id="modalreview" class="modal">
  <div class="modal-background"></div>
    <div class="modal-resize modal-content">
    		<div class="modal-card-body">
    			<a><svg class="close-popup" viewBox="0 0 24 24" role="img" aria-label="Close" focusable="false" style="display: block; fill: rgb(118, 118, 118); height: 16px; width: 16px;">
    				<path fill-rule="evenodd" d="M23.25 24a.74.744 0 0 1-.53-.22L12 13.062 1.28 23.782a.75.75 0 0 1-1.06-1.06L10.94 12 .22 1.28A.75.75 0 1 1 1.28.22L12 10.94 22.72.22a.749.749 0 1 1 1.06 1.06L13.062 12l10.72 10.72a.749.749 0 0 1-.53 1.28"></path>
    			</svg></a><br>

          <p class="title is-4 is-spaced"><b>Đánh giá</b></p>

          @foreach($reviews as $review)
            @php
              $user = DB::table('users')->where('id', $review->user_id)->first();
            @endphp
          <div class="comment-product">
            <div class="columns">
              <div class="column is-2">
                @if($user->facebook_id)
                <img src="{{$user->avatar}}" class="avatar">
                @else
                  <img src="{{ asset('files/images/'.$user->avatar) }}" class="avatar">
                @endif
              </div>
              <div class="column is-10">
                <h4 style="font-weight: 500;">{{ $user->lastname }} {{ $user->firstname }}</h4>
                <h5 style="font-weight: 300;">{{ $review->created_at->format('d/m/Y') }}</h5>
              </div>
            </div>
            <div class="comment-content">
              {{ $review->review }}
              <br>
            </div>
          </div>
          <hr>
          @endforeach

    		</div>
    </div>
  </div>