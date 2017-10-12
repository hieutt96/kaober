@extends('backend.master')
@section('title', 'Language | Kaober.com')
@section('titlePage', 'Quản lý ngôn ngữ')

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

				<div class="col-md-4">
					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">THÊM NGÔN NGỮ MỚI</h3>
					  </div>
					    <div class="box-body">
					    	<div class="form-group">
					    	  <label for="title">Tên ngôn ngữ *</label>
					    	  <input type="text" class="form-control" id="title" name="title" required>
					    	  <p class="help-block">Ví dụ: Tiếng Việt, English.</p>
					    	</div>

					    	<div class="form-group">
					    	  <label for="description">Mô tả *</label>
					    	  <input type="text" class="form-control" id="description" name="description" required>
					    	</div>

					    	<div class="form-group">
					    	  <label for="slug">Đường dẫn tĩnh *</label>
					    	  <input type="text" class="form-control" id="slug" name="slug" required>
					    	  <p class="help-block">Ví dụ: vi, en.</p>
					    	</div>

					    	<div class="form-group">
					    	  <label for="slug">Tùy chọn hiển thị</label>
					    	  <select class="form-control select2" style="width: 100%;" name="status" id="status" value="{!! old('status') !!}">
					    	    <option value="1">Hiển thị</option>
					    	    <option value="0">Không hiển thị</option>
					    	  </select>
					    	  <p class="help-block">Nếu chọn "không hiển thị" thì ngôn ngữ sẽ không được hiển thị trên website.</p>
					    	</div>
					    </div>
					    <div class="box-footer">
					    	<button class="btn btn-block btn-primary"><i class="fa fa-plus"></i> Thêm mới</button>
					    </div>
					</div>
				</div>

				<div class="col-md-8">

					<style type="text/css">
						.maxsize {
							max-width: 170px;
						}
					</style>

					<div class="box box-default">
					  <div class="box-header with-border">
					    <h3 class="box-title">DANH SÁCH NGÔN NGỮ</h3> 
					  </div>
					    <div class="box-body">
				    	  <div class="box-body">
				    	    <table id="list" class="table table-bordered table-striped">
				    	      <thead>
				    	      <tr>
				    	      	<th>#</th>
				    	        <th>Tên</th>
				    	        <th>Mô tả</th>
				    	        <th>Đường dẫn</th>
				    	        <th>Trạng thái</th>
				    	        <th>#</th>
				    	      </tr>
				    	      </thead>
				    	      <tbody>
				    	      	{{ csrf_field() }}
				    	      	<?php $stt = 1; ?>
				    	      	@foreach( $languages as $language )
						    	    <tr>
						    	    	<td>{{ $stt++ }}</td>
						    	    	<td>{{ $language->name }}</td>
						    	    	<td>{{ $language->description }}</td>
						    	    	<td>{{ $language->slug }}</td>
						    	    	<td>{{ $language->status }}</td>
						    	    	<td>
						    	    		<div class="btn-group">
						    	    			<button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
						    	    		</div>
						    	    	</td>
						    	    </tr>
					    	    @endforeach
				    	      </tbody>
				            <tfoot>
				            <tr>
				            	<th>#</th>
				              	<th>Tên</th>
				    	        <th>Mô tả</th>
				    	        <th>Đường dẫn</th>
				    	        <th>Trạng thái</th>
				    	        <th>#</th>
				            </tr>
				            </tfoot>
				    	    </table>
				    	  </div>
						</div>
					</div>
				</div>

			</form>
		</div>
	</section>

@endsection
