@extends('backend.master')
@section('title', 'Blog | Kaober.com')
@section('titlePage', 'Thêm bài viết')
@section('content')
	
	<section class="content">
		<div class="row">
			<form role="form" method="POST" action="" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="col-md-12">

					{{-- thông báo lỗi về request--}}
				  	@include('blog::layouts.error')

					{{-- thành công --}}
					@include('blog::layouts.success')

					{{-- thông báo lỗi về thêm bài viết--}}
					@include('blog::layouts.failed')

				</div>

				{{-- Body left --}}
				<div class="col-md-9">

					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">THÊM BÀI VIẾT</h3>
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
					              <label for="titleVi">Tiêu đề *</label>
					              <input type="text" class="form-control" id="titleVi" name="titleVi" required value="{!! old('titleVi') !!}">
					              <p class="help-block">Tiêu đề hiển thị bài viết.</p>
					            </div>

					            <div class="form-group">
					                <label>Nội dung *</label>
					                <textarea class="form-control" rows="5" name="contentVi" id="contentVi" required>{!! old('contentVi') !!}</textarea>

					                  <script type="text/javascript">
					                	  	tinymce.init({
					                	  	selector: "#contentVi",
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
					                	  	external_filemanager_path:"{{ asset('filemanager') }}",
					                	  	filemanager_title:"Kaober filemanager" ,
					                	  	external_plugins: {"filemanager" : "{{ asset('filemanager') }}/plugin.min.js"}
					                	  	
					                	  	});
					                  </script>
					            </div>


					          </div>

					          {{-- tiếng anh --}}
					          <div class="tab-pane" id="en">

					            <div class="form-group">
					              <label for="titleEn">Title *</label>
					              <input type="text" class="form-control" id="titleEn" name="titleEn" required value="{!! old('titleEn') !!}">
					              <p class="help-block">Title display post.</p>
					            </div>

					            <div class="form-group">
					                <label>Content *</label>
					                <textarea class="form-control" rows="3" name="contentEn" id="contentEn">{!! old('contentEn') !!}</textarea>

					                  <script type="text/javascript">
					                	  	tinymce.init({
					                	  	selector: "#contentEn",
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
					              <label for="slug">Đường dẫn tĩnh *</label>
					              <input type="text" class="form-control" id="slug" name="slug" required value="{!! old('slug') !!}">
					              <p class="help-block">Đường dẫn hiển thị bài viết (tự động chuyển).</p>
					            </div>

					            <div class="form-group">
					              <label for="keywordVi">SEO: từ khóa *</label>
					              <input type="text" class="form-control" id="keywordVi" name="keywordVi" required value="{!! old('keywordVi') !!}">
					              <p class="help-block">Từ khóa hiển thị khi SEO.</p>
					            </div>

					            <div class="form-group">
					              <label for="metakeyVi">SEO: Miêu tả *</label>
					              <input type="text" class="form-control" id="metakeyVi" name="metakeyVi" required value="{!! old('metakeyVi') !!}">
					              <p class="help-block">Miêu tả hiển thị khi SEO.</p>
					            </div>

					          </div>

					          {{-- tiếng anh --}}
					          <div class="tab-pane" id="en1">

					            <div class="form-group">
					              <label for="keywordEn">SEO: keyword *</label>
					              <input type="text" class="form-control" id="keywordEn" name="keywordEn" required value="{!! old('keywordEn') !!}">
					              <p class="help-block">Keyword display SEO.</p>
					            </div>

					            <div class="form-group">
					              <label for="metakeyEn">SEO: Description *</label>
					              <input type="text" class="form-control" id="metakeyEn" name="metakeyEn" required value="{!! old('metakeyEn') !!}">
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
					    <h3 class="box-title">DANH MỤC BÀI VIẾT</h3>
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
					      	<p class="help-block">Mỗi bài viết thuộc về 1 danh mục.</p>
					      </div>

					    </div>
					</div>

					{{-- ảnh đại diện sản phẩm --}}
					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">ẢNH SẢN PHẨM</h3>
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
					      	    Tải ảnh lên <input type="file" id="inputImages" name="inputImages">
					      	</label>

					      </div>

					    </div>
					</div>
					{{-- end --}}

					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">ĐĂNG BÀI VIẾT</h3>
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
					      	<button class="btn btn-block btn-primary">Đăng bài viết</button>
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

		$('.alert').show().delay(5000).fadeOut();

		$('#titleVi').focusout(function() {
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
	        readURL(this);
	      });
	 });
</script>


  {{-- 

external_filemanager_path:"{{ asset('filemanager') }}",
	  	filemanager_title:"Kaober filemanager" ,
	  	external_plugins: {"filemanager" : "{{ asset('filemanager') }}/plugin.min.js"}

   --}}

@endsection
