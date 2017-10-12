<div class="container has-text-centered">
		<div class="filter">
			<div class="columns has-text-centered">
				<div class="column is-2"></div>
				<div class="column is-2">
					<div class="block">
						<a class="button" id="categoriesbook">
						    <span>Danh mục sách</span>
						    <span class="icon is-small">
						      <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: currentcolor; height: 0.8em; width: 0.8em;"><path fill-rule="evenodd" d="M16.291 4.295a1 1 0 1 1 1.414 1.415l-8 7.995a1 1 0 0 1-1.414 0l-8-7.995a1 1 0 1 1 1.414-1.415l7.293 7.29 7.293-7.29z"></path></svg>
						    </span>
						</a>
						{{-- <a class="button">
						    <span>Thể loại</span>
						    <span class="icon is-small">
						      <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="display: block; fill: currentcolor; height: 0.8em; width: 0.8em;"><path fill-rule="evenodd" d="M16.291 4.295a1 1 0 1 1 1.414 1.415l-8 7.995a1 1 0 0 1-1.414 0l-8-7.995a1 1 0 1 1 1.414-1.415l7.293 7.29 7.293-7.29z"></path></svg>
						    </span>
						</a> --}}
					</div>
				</div>
				<div class="column is-6">
					<form method="GET" action="{{ route('frontend.search.product') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="field has-addons">
							  <p class="control">
							  </p>
							  <p class="control is-expanded">
							    <input class="input" type="text" placeholder="Tìm kiếm tên sách ..." id="productsearch" name="productsearch">
							  </p>
							  <p class="control">
							    <button class="button" type="submit">
							      Tìm kiếm
							    </button>
							  </p>
						</div>
					</form>
				</div>
				<div class="column is-2"></div>
			</div>
		</div>	
</div>

