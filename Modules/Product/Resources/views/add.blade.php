@extends('backend.master')
@section('title', 'Product | Kaober.com')
@section('titlePage', 'Đăng sản phẩm')

@section('content')

	<section class="content">
		<div class="row">
			<form role="form" method="POST" action="" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="col-md-12">

					{{-- thông báo lỗi về request--}}
				  	@include('product::layouts.error')

					{{-- thành công --}}
					@include('product::layouts.success')

					{{-- thông báo lỗi về thêm sản phẩm lỗi --}}
					@include('product::layouts.failed')

				</div>

				{{-- Body left --}}
				<div class="col-md-9">

					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">THÔNG TIN CƠ BẢN</h3>
					    <div class="box-tools pull-right">
					      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					    </div>
					  </div>

					    <div class="box-body">

					      {{-- Custom Tabs --}}
					      <div class="nav-tabs-custom">
					        <ul class="nav nav-tabs">

					          <li class="active"><a href="#vi" data-toggle="tab">
					          	<span class="flag flag-vn"></span>Tiếng việt</a></li>
					          <li><a href="#en" data-toggle="tab">
					          <span class="flag flag-us"></span>English</a></li>

					        </ul>
					        {{-- NỘI DUNG TAB --}}
					        <div class="tab-content">

					        {{-- tiếng việt --}}
					          <div class="tab-pane active" id="vi">

					            <div class="form-group">
					              <label for="titleProductVi">Tên sản phẩm *</label>
					              <input type="text" class="form-control" id="titleProductVi" name="titleProductVi" placeholder="" value="{!! old('titleProductVi') !!}" required>
					              <p class="help-block">Tên sản phẩm hiển thị.</p>
					            </div>


					            <div class="form-group">
					                <label>Mô tả sản phẩm *</label>
					                <textarea id="descriptionProductVi" name="descriptionProductVi" required>
					                	{!! old('descriptionProductVi') !!}
					                </textarea>
					                  <script type="text/javascript">
					                	  	tinymce.init({
					                	  	selector: "#descriptionProductVi",
					                	  	theme: "modern",
					                	  	relative_urls : false,
					                	  	remove_script_host: false,
					                	  	plugins: [       
					                	  	"advlist autolink code link image lists charmap print preview hr anchor pagebreak spellchecker",
					                	  	"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					                	  	"save table contextmenu directionality emoticons template paste textcolor responsivefilemanager preview sh4tinymce wordcount"
					                	  	],
					                	  	toolbar: "sizeselect | bold italic | fontselect |  fontsizeselect | insertfile undo redo | sh4tinymce | preview | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | responsivefilemanager | print preview media fullpage | forecolor backcolor emoticons",   
					                	  	style_formats_merge: true,
					                	  	style_formats: [
					                	  	{title: 'HML Code', block: 'pre', classes: 'brush: xml'},
					                	  	{title: 'CSS Code', block: 'pre', classes: 'brush: css'},
					                	  	{title: 'Javascript Code', block: 'pre', classes: 'brush: js'},
					                	  	{title: 'PHP Code', block: 'pre', classes: 'brush: php'},
					                	  	],
					                	  	
					                	  	});
					                  </script>

					            </div>

					          </div>

					          {{-- tiếng anh --}}
					          <div class="tab-pane" id="en">

					            <div class="form-group">
					              <label for="titleProductEn">Title *</label>
					              <input type="text" class="form-control" id="titleProductEn" name="titleProductEn" placeholder="" value="{!! old('titleProductEn') !!}">
					              <p class="help-block">Title display product.</p>
					            </div>

					            <div class="form-group">
					                <label>Product Description *</label>

					                <textarea id="descriptionProductEn" name="descriptionProductEn"  required>
					                	{!! old('descriptionProductEn') !!}
					                </textarea>
					                  <script type="text/javascript">
					                	  	tinymce.init({
					                	  	selector: "#descriptionProductEn",
					                	  	theme: "modern",
					                	  	relative_urls : false,
					                	  	remove_script_host: false,
					                	  	plugins: [       
					                	  	"advlist autolink code link image lists charmap print preview hr anchor pagebreak spellchecker",
					                	  	"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					                	  	"save table contextmenu directionality emoticons template paste textcolor responsivefilemanager preview sh4tinymce wordcount"
					                	  	],
					                	  	toolbar: "sizeselect | bold italic | fontselect |  fontsizeselect | insertfile undo redo | sh4tinymce | preview | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | responsivefilemanager | print preview media fullpage | forecolor backcolor emoticons",   
					                	  	style_formats_merge: true,
					                	  	style_formats: [
					                	  	{title: 'HML Code', block: 'pre', classes: 'brush: xml'},
					                	  	{title: 'CSS Code', block: 'pre', classes: 'brush: css'},
					                	  	{title: 'Javascript Code', block: 'pre', classes: 'brush: js'},
					                	  	{title: 'PHP Code', block: 'pre', classes: 'brush: php'},
					                	  	],
					                	  	
					                	  	});
					                  </script>

					            </div>

					          </div>

					        </div>
					      </div>
					      {{-- nav-tabs-custom --}}


					    </div>
					</div>

					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">SEO</h3>
					    <div class="box-tools pull-right">
					      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					    </div>
					  </div>

					    <div class="box-body">

					      {{-- Custom Tabs --}}
					      <div class="nav-tabs-custom">
					        <ul class="nav nav-tabs">

					          <li class="active"><a href="#vi1" data-toggle="tab">
					          	<span class="flag flag-vn"></span>Tiếng việt</a></li>
					          <li><a href="#en1" data-toggle="tab">
					          	<span class="flag flag-us"></span>English</a></li>

					        </ul>
					        {{-- NỘI DUNG TAB --}}
					        <div class="tab-content">

					        {{-- tiếng việt --}}
					          <div class="tab-pane active" id="vi1">

					          	<div class="form-group">
					          	  <label for="slug">Đường dẫn tĩnh (url) *</label>
					          	  <input type="text" class="form-control" id="slug" name="slug" placeholder="" value="{!! old('slug') !!}">
					          	  <p class="help-block">Đường dẫn tới sản phẩm.</p>
					          	</div>

					          	<div class="form-group">
					          	  <label for="keywordProductVi">SEO: từ khóa</label>
					          	  <input type="text" class="form-control" id="keywordProductVi" name="keywordProductVi" placeholder="" value="{!! old('keywordProductVi') !!}">
					          	  <p class="help-block">Từ khóa hiển thị khi SEO.</p>
					          	</div>

					          	<div class="form-group">
					          	  <label for="metakeyProductVi">SEO: Miêu tả</label>
					          	  <input type="text" class="form-control" id="metakeyProductVi" name="metakeyProductVi" placeholder="" value="{!! old('metakeyProductVi') !!}">
					          	  <p class="help-block">Miêu tả hiển thị khi SEO.</p>
					          	</div>

					          </div>

					          {{-- tiếng anh --}}
					          <div class="tab-pane" id="en1">

					            
					            <div class="form-group">
					              <label for="keywordProductEn">SEO: keyword</label>
					              <input type="text" class="form-control" id="keywordProductEn" name="keywordProductEn" placeholder="" value="{!! old('keywordProductEn') !!}">
					              <p class="help-block">Keyword display SEO.</p>
					            </div>

					            <div class="form-group">
					              <label for="metakeyProductEn">SEO: Description</label>
					              <input type="text" class="form-control" id="metakeyProductEn" name="metakeyProductEn" placeholder="" value="{!! old('metakeyProductEn') !!}">
					              <p class="help-block">Descritpion display SEO.</p>
					            </div>

					          </div>

					        </div>
					      </div>
					      {{-- nav-tabs-custom --}}


					    </div>
					</div>



				</div>
				{{-- end Body left --}}

				{{-- Body right --}}
				<div class="col-md-3">

					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">DANH MỤC SẢN PHẨM *</h3>
					    <div class="box-tools pull-right">
					      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					    </div>
					  </div>

					    <div class="box-body">

					      <div class="form-group">
					        <select class="form-control select2" style="width: 100%;" name="selectCate" id="selectCate" value="{!! old('selectCate') !!}">
					          <option value="{!! old('selectCate') !!}"></option>
					          @foreach( $categories as $category )
					          	<option value="{{ $category->cate_id }}">{{ $category->title }}</option>
					          @endforeach
					        </select>
					      </div>

					      <div class="box-footer">
					      	<p class="help-block">Mỗi sản phẩm thuộc về 1 danh mục.</p>
					      </div>

					    </div>
					</div>

					{{-- thông tin sản phẩm --}}
					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">THÔNG TIN SẢN PHẨM</h3>
					    <div class="box-tools pull-right">
					      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					    </div>
					  </div>

					    <div class="box-body">

					      <div class="form-group">
					        <label for="priceProduct">Giá (đơn vị: nghìn vnđ) *</label>
					        <input type="number" class="form-control" id="priceProduct" name="priceProduct" placeholder="" value="{!! old('priceProduct') !!}">
					      </div>

					      <div class="form-group">
					        <label for="priceProductDiscount">Giá khuyến mại(đơn vị: nghìn vnđ)</label>
					        <input type="number" class="form-control" id="priceProductDiscount" name="priceProductDiscount" placeholder="" value="{!! old('priceProduct') !!}">
					        <p class="help-block">Tùy chọn.</p>
					      </div>

					    </div>
					</div>


					{{-- ảnh đại diện sản phẩm --}}
					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">ẢNH SẢN PHẨM *</h3>
					    <div class="box-tools pull-right">
					      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					    </div>
					  </div>

					    <div class="box-body">

					      <div class="form-group">
					        	<img src="{{ asset('files/images/thumbnail.png') }}" style="max-width: 220px; align-items: center;" id="thumbnail" name="thumbnail">
					      </div>

					      <div class="box-footer">

					      	<label class="btn btn-block btn-default btn-file">
					      	    Tải ảnh lên <input type="file" style="display: none;" id="inputImages" name="inputImages">
					      	</label>

					      </div>

					    </div>
					</div>
					{{-- end --}}

					{{-- nhà cung cấp --}}
					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">NHÀ CUNG CẤP SẢN PHẨM *</h3>
					    <div class="box-tools pull-right">
					      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					    </div>
					  </div>

					    <div class="box-body">

					      <div class="form-group">
					        <select class="form-control select2" style="width: 100%;" name="provider" id="provider" value="{!! old('provider') !!}">
					          <option value="{!! old('provider') !!}"></option>
					          @foreach( $shops as $shop )
					          	<option value="{{ $shop->shop_id }}">{{ $shop->title }}</option>
					          @endforeach
					        </select>
					      </div>

					      <div class="box-footer">
					      	<p class="help-block">Chọn một NCC cho sản phẩm.</p>
					      </div>

					    </div>
					</div>

					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">ĐĂNG SẢN PHẨM</h3>
					    <div class="box-tools pull-right">
					      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					    </div>
					  </div>

					    <div class="box-body">

					      <div class="form-group">
					        <select class="form-control select2" style="width: 100%;" name="status" id="status" value="{!! old('status') !!}">
					          <option value="1">Hiển thị</option>
					          <option value="0">Không hiển thị</option>
					        </select>
					      </div>

					      <div class="box-footer">
					      	<button class="btn btn-block btn-primary" type="submit">Đăng sản phẩm</button>
					      </div>

					    </div>
					</div>
					
				</div>
				{{-- end Body right --}}
			</form>
		</div>
	</section>


<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(event) {

	// hiển thị thông báo trong 5s
	$('.alert').show().delay(5000).fadeOut();
	// bắt sự kiện dời chuột để add vào slug
	$('#titleProductVi').focusout(function() {
		$('#vi1').find("input[name='slug']").val(ChangeToSlug($(this).val()));
	});
	
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#thumbnail').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
      $("#inputImages").change(function () {
      	// alert(1);
        readURL(this);
      });
 });
</script>

@endsection
