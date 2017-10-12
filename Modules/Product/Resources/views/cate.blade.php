@extends('backend.master')
@section('title', 'Product | Kaober.com')
@section('titlePage', 'Danh mục sản phẩm')

@section('content')

	<section class="content">
		<div class="row">
			<form role="form" method="POST" action="">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="col-md-12">

					{{-- thông báo lỗi về request--}}
				  	@include('product::layouts.error')

				  	{{-- thông báo lỗi về thêm danh mục --}}
					@include('product::layouts.failed')

					{{-- thành công --}}
					@include('product::layouts.success')

				</div>

				{{-- Body left --}}
				<div class="col-md-4">
					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">THÊM DANH MỤC SẢN PHẨM</h3>
					  </div>

					    <div class="box-body">

					      	{{-- Custom Tabs --}}
					      	<div class="nav-tabs-custom">
					      	<ul class="nav nav-tabs">

					      	  <li class="active"><a href="#vi" data-toggle="tab">
					      	  	<span class="flag flag-vn"></span> Tiếng việt</a></li>
					      	  <li>
					      	  	<a href="#en" data-toggle="tab"><span class="flag flag-us"></span> English</a></li>

					      	</ul>
					      	{{-- NỘI DUNG TAB --}}
					      	<div class="tab-content">

					      	{{-- tiếng việt --}}
					      	  <div class="tab-pane active" id="vi">

					      	    <div class="form-group">
					      	      <label for="titleVi">Tên *</label>
					      	      <p class="error text-center alert alert-danger hidden"></p>
					      	      <input type="text" class="form-control" id="titleVi" name="titleVi" required>
					      	      <p class="help-block">Tên danh mục hiển thị.</p>
					      	    </div>


					      	    <div class="form-group">
					      	      <label for="descriptionVi">Mô tả</label>
					      	      <p class="error text-center alert alert-danger hidden"></p>
					      	      <input type="text" class="form-control" id="descriptionVi" name="descriptionVi" required>
					      	      <p class="help-block">Mô tả bình thường không được sử dụng trong giao diện, tuy nhiên có vài giao diện hiện thị mô tả này.</p>
					      	    </div>

					      	    <div class="form-group">
					      	      <label for="slug">Đường dẫn tĩnh</label>
					      	      <p class="error text-center alert alert-danger hidden"></p>
					      	      <input type="text" class="form-control" id="slug" name="slug" required>
					      	      <p class="help-block">Chuỗi này bao gồm chữ cái thường, số và dấu gạch ngang (-).</p>
					      	    </div>

					      	    <div class="form-group">
					      	      <label for="slug">Tùy chọn hiển thị</label>
					      	      <select class="form-control select2" style="width: 100%;" name="status" id="status" value="{!! old('status') !!}">
					      	        <option value="1">Hiển thị</option>
					      	        <option value="0">Không hiển thị</option>
					      	      </select>
					      	    </div>

					      	  </div>

					      	  {{-- tiếng anh --}}
					      	  <div class="tab-pane" id="en">

					      	    <div class="form-group">
					      	      <label for="titleEn">Name *</label>
					      	      <input type="text" class="form-control" id="titleEn" name="titleEn" required>
					      	      <p class="help-block">Category name display.</p>
					      	    </div>

					      	    <div class="form-group">
					      	      <label for="descriptionEn">Description</label>
					      	      <input type="text" class="form-control" id="descriptionEn" name="descriptionEn" required>
					      	      <p class="help-block">Option.</p>
					      	    </div>

					      	  </div>

					      	</div>
					      	</div>
					      	{{-- nav-tabs-custom --}}

					    </div>

					    <div class="box-footer">
					    	<button type="submit" class="btn btn-block btn-primary"><i class="fa fa-plus"></i> Thêm danh mục</button>
					    </div>
					</div>
				</div>
			</form>
				{{-- end Body left --}}

				{{-- Body right --}}
				<div class="col-md-8">

					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">DANH SÁCH DANH MỤC</h3> 
					  </div>
					    <div class="box-body">
				    	  <div class="box-body">
				    	    <table id="list" class="table table-bordered table-striped">
				    	      <thead>
				    	      <tr>
				    	      	<th>#</th>
				    	        <th>Tên</th>
				    	        <th>Số sản phẩm</th>
				    	        <th>Đường dẫn tĩnh</th>
				    	        <th>Trạng thái</th>
				    	        <th>#</th>
				    	      </tr>
				    	      </thead>
				    	      <tbody>

					    	      {{ csrf_field() }}
					    	      <?php $stt = 1; ?>
					    	      @foreach( $categories as $category )
					    	      <tr>
					    	      <td>{{ $stt++ }}</td>
					    	        <td>{{ $category->title }}</td>
					    	        <td class="text-red">{{ count($category->products) }}</td>
					    	        <td>{{ $category->slug }}</td>
					    	        <td>
					    	        	@if( $category->status )
					    	        		<small class="label bg-green">Hiển thị</small>
					    	        	@else
					    	        		<small class="label bg-yellow">Ẩn</small>
					    	        	@endif
					    	        </td>
					    	        <td>
					    	        	<div class="btn-group">
					    	        			<?php $cateEn = DB::table('product_category_translations')->where('cate_id', $category->cate_id)->first(); ?>
					    	        			<button id="edit-cate" name="edit-cate" type="button" class="edit-cate btn btn-info btn-sm" data-toggle="modal" data-target=".bs-sm" data-id= "{{ $category->cate_id }}" data-slug= "{{ $category->slug }}" data-titlevi= "{{  $category->title }}" data-desvi = "{{ $category->description }}" data-status= "{{ $category->status }}" data-titleen = "{{ $cateEn->title or '' }}" data-desen = "{{ $cateEn->description or ''}}"><i class="fa fa-edit"></i></button>
					    	        		  	<a href="{!! URL::route('admin::product::category::delete', $category->cate_id) !!}">
					    	        		  		<button onclick="return confirmDelete('Bạn có chắc chắn muốn xóa hem?')" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
					    	        		  	</a>
					    	        	</div>
					    	        </td>
					    	      </tr>
					    	      @endforeach

				    	      </tbody>
				            <tfoot>
				            <tr>
				            	<th>#</th>
				              	<th>Tên</th>
				              	<th>Số sản phẩm</th>
				    	        <th>Đường dẫn tĩnh</th>
				    	        <th>Mô tả</th>
				    	        <th>#</th>
				            </tr>
				            </tfoot>
				    	    </table>
				    	  </div>
						</div>
					</div>

				</div>
				{{-- end Body right --}}
		</div>


	{{-- modal sửa --}}
	<div class="modal fade bs-sm" tabindex="-1" role="dialog" id="edit-modal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Sửa danh mục bài viết</h4>
	      </div>
	      <div class="modal-body">
	        <form role="form" method="POST" action="">
	        	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	        	<div class="box-default">
	        	    <div class="box-body">
	        	      	{{-- Custom Tabs --}}
	        	      	<div class="nav-tabs-custom">
	        	      	<ul class="nav nav-tabs">

	        	      	  <li class="active"><a href="#vi1" data-toggle="tab">
	        	      	  	<span class="flag flag-vn"></span> Tiếng việt</a>
	        	      	  </li>
	        	      	  <li><a href="#en1" data-toggle="tab">
	        	      	  	<span class="flag flag-us"></span> English</a>
	        	      	  </li>

	        	      	</ul>
	        	      	{{-- NỘI DUNG TAB --}}
	        	      	<div class="tab-content">

	        	      	{{-- tiếng việt --}}
	        	      	  <div class="tab-pane active" id="vi1">

	        	      	    <div class="form-group">
	        	      	      <label for="titleViEdit">Tên *</label>
	        	      	      <input type="text" class="form-control" id="titleViEdit" name="titleViEdit" required>
	        	      	    </div>

	        	      	    <div class="form-group">
	        	      	      <label for="descriptionViEdit">Mô tả *</label>
	        	      	      <input type="text" class="form-control" id="descriptionViEdit" name="descriptionViEdit" required>
	        	      	    </div>

	        	      	    <div class="form-group">
	        	      	      <label for="statusEdit">Tùy chọn hiển thị</label>
	        	      	      <select class="form-control select2" style="width: 100%;" name="statusEdit" id="statusEdit" value="{!! old('status') !!}">
	        	      	        <option value="1">Hiển thị</option>
	        	      	        <option value="0">Không hiển thị</option>
	        	      	      </select>
	        	      	    </div>

	        	      	    <div class="form-group">
	        	      	      <input type="text" class="form-control" id="cateid" name="cateid" disabled>
	        	      	    </div>

	        	      	    <div class="form-group">
	        	      	      <input type="text" class="form-control" id="slugEdit" name="slugEdit" disabled>
	        	      	    </div>

	        	      	  </div>

	        	      	  {{-- tiếng anh --}}
	        	      	  <div class="tab-pane" id="en1">

	        	      	    <div class="form-group">
	        	      	      <label for="titleEnEdit">Name *</label>
	        	      	      <input type="text" class="form-control" id="titleEnEdit" name="titleEnEdit" required>
	        	      	    </div>

	        	      	    <div class="form-group">
	        	      	      <label for="descriptionEnEdit">Description *</label>
	        	      	      <input type="text" class="form-control" id="descriptionEnEdit" name="descriptionEnEdit" required>
	        	      	    </div>

	        	      	  </div>
	        	      	</div>
	        	      	</div>
	        	      	{{-- nav-tabs-custom --}}
	        	    </div>
	        	</div>
	      	</div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
		        	<button class="btn btn-primary">Lưu thay đổi</button>
		      </div>
	      </form>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


	</section>

	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function(event) {
			// hiển thị thông báo trong 5s
			$('.alert').show().delay(5000).fadeOut();

			// bắt sự kiện dời chuột để add vào slug
			$('#titleVi').focusout(function() {
				$('#vi').find("input[name='slug']").val(($(this).val()));
			});

		    $('.edit-cate').on('click', function() {

		      	var cateid = $(this).attr('data-id');
		      	var titleViEdit = $(this).attr('data-titlevi');
		      	var descriptionViEdit = $(this).attr('data-desvi');
		      	var titleEnEdit = $(this).attr('data-titleen');
		      	var descriptionEnEdit = $(this).attr('data-desen');
		      	var slugEdit = $(this).attr('data-slug');
		      	var urlEdit = window.location.href + '/edit/';

		      	$('#edit-modal').find("input[name='cateid']").val(cateid);
		      	$('#edit-modal').find("input[name='titleViEdit']").val(titleViEdit);
		      	$('#edit-modal').find("input[name='descriptionViEdit']").val(descriptionViEdit);
		      	$('#edit-modal').find("input[name='titleEnEdit']").val(titleEnEdit);
		      	$('#edit-modal').find("input[name='descriptionEnEdit']").val(descriptionEnEdit);
		      	$('#edit-modal').find("input[name='slugEdit']").val(slugEdit);
		      	$('#edit-modal').find("form").attr("action", urlEdit + cateid);
		      });

		 });
	</script>


@endsection
