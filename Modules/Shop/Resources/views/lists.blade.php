@extends('backend.master')
@section('title', 'Nhà cung cấp | Kaober.com')
@section('titlePage', 'Danh sách nhà cung cấp')

@section('buttonAdd')
    <ol class="breadcrumb">
        <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".addShop" name="addUser" id="addShop"><i class="fa fa-plus"></i> Thêm Mới</button></a>
    </ol><br>
@endsection

@section('content')

		<section class="content">
			<section class="content">
			    
				<div class="row">

					{{-- thông báo xóa thành công --}}
					<div class="col-xs-12">
						{{-- thông báo lỗi về request--}}
					  	@include('blog::layouts.error')

						{{-- thành công --}}
						@include('blog::layouts.success')

						{{-- thông báo lỗi về thêm bài viết--}}
						@include('blog::layouts.failed')
					</div>

			        <div class="col-xs-12">

			        	<div class="box">

			        	  <div class="box-header">
			        	    {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
			        	  </div>
			        	  {{-- /.box-header --}}
			        	  <div class="box-body">
			        	    <table id="list" class="table table-bordered table-striped">
			        	      <thead>
			        	      <tr>
			        	      	<th>#</th>
			        	        <th>Tên nhà cung cấp</th>
			        	        <th>Ảnh đại diện</th>
			        	        <th>Địa chỉ</th>
			        	        <th>Slogan</th>
			        	        <th>Miêu tả</th>
			        	        <th>Số sản phẩm</th>
			        	        <th>Trạng thái</th>			        	        
			        	        <th>#</th>
			        	      </tr>
			        	      </thead>
			        	      <tbody>
			        	      <?php $countShop = 1; ?>
			        	      	@foreach( $shops as $shop )
				        	      <tr>
				        	      	<td>{{ $countShop++ }}</td>
				        	      	
				        	        <td class="text-red">{{ $shop->title }}</td>
				        	        <td>
				        	      		<img style="max-width: 150px;" src="{!! asset('files/images/'.$shop->thumbnail) !!}">
				        	      	</td>

				        	        <td>{{ $shop->address or 'none' }}</td>
				        	        <td>{{ $shop->slogan or 'none' }}</td>

				        	        <td>{!! $shop->description or 'none' !!}</td>

				        	        <td class="text-red">{{ count($shop->products) }}</td>

				        	        <td>
				        	        	@if($shop->status) 
				        	        		<small class="label bg-green">Hiển thị</small>
				        	        	@else
				        	        		<small class="label bg-yellow">Ẩn</small>
				        	        	@endif
				        	        </td>

				        	        <td>
				        	        	<div class="btn-group">
				        	        		<a href="#">
				        	        			<button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
				        	        		</a>
				        	        		<a href="">
				        	        			<button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
				        	        		</a>
				        	        	</div>
				        	        </td>
				        	      </tr>
			        	      	@endforeach
			        	      </tbody>
			                <tfoot>
			                <tr>
			        	      	<th>#</th>
			        	        <th>Tên nhà cung cấp</th>
			        	        <th>Ảnh đại diện</th>
			        	        <th>Địa chỉ</th>
			        	        <th>Slogan</th>
			        	        <th>Miêu tả</th>
			        	        <th>Số sản phẩm</th>
			        	        <th>Trạng thái</th>			        	        
			        	        <th>#</th>
			        	      </tr>
			                </tfoot>
			        	    </table>
			        	  </div>
			        	  {{-- /.box-body --}}
			        	</div>
			        	{{-- /.box --}}
			        </div>
			    </div>

			    
			</section>
		</section>


	{{-- THÊM SHOP - NHÀ CUNG CẤP MỚI, muốn to modal: thêm class vào modal-dialog: modal-lg --}}
	<div class="modal fade addShop" id="addShop" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	 	<form role="form" method="POST" action="" enctype="multipart/form-data">
	 		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Thêm nhà cung cấp mới</h4>
		      </div>
		      <div class="modal-body">
		        
			      	<div class="form-group">
			      	  <label for="title">Tên nhà cung cấp *</label>
			      	  <input type="text" class="form-control" id="title" name="title" value="{!! old('title') !!}" required>
			      	</div>

			      	<div class="form-group">
			      	  <label for="description">Miêu tả *</label>
			      	  <textarea class="textarea" placeholder="Nhập miêu tả về nhà cung cấp ..." style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="description" name="description">
			      	  	{!! old('description') !!}
			      	  </textarea>
			      	</div>

			      	<div class="form-group">
			      	  <label for="hotline">Hotline *</label>
			      	  <input type="number" class="form-control" id="hotline" name="hotline" value="{!! old('hotline') !!}" required>
			      	</div>

			      	<div class="form-group">
			      		<label for="userId">Người quản trị (Chủ nhà cung cấp) *</label>
			      	  <select class="form-control select2" style="width: 100%;" name="userId" id="userId" value="{!! old('userId') !!}">
			      	    <option value="">Chọn 1 chủ nhà cung cấp</option>
			      	    @foreach( $users as $user )
			      	    	<option value="{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }} - {{ $user->email }} - {{ $user->phone }}</option>
			      	    @endforeach
			      	  </select>
			      	</div>

			      	<div class="form-group">
			      	  <label for="address">Địa chỉ *</label>
			      	  <input type="text" class="form-control" id="address" name="address" value="{!! old('address') !!}" required>
			      	</div>

			      	<div class="form-group">
			      		<label for="thumbnail">Logo hoặc ảnh đại diện *</label><br>
			      	  <img src="{{ asset('files/images/thumbnail.png') }}" style="max-width: 220px; align-items: center;" id="thumbnail" name="thumbnail">
			      	  <label class="btn btn-default btn-file">
			      	      Tải ảnh lên <input type="file" style="display: none;" id="inputImages" name="inputImages">
			      	  </label>
			      	</div>

			      	<div class="form-group">
			      	  <label for="slogan">Slogan</label>
			      	  <input type="text" class="form-control" id="slogan" name="slogan" value="{!! old('slogan') !!}">
			      	</div>

			      	<div class="form-group">
			      	  <label for="slug">Đường dẫn tĩnh tới nhà cung cấp *</label>
			      	  <div class="input-group">
			      	  	<span class="input-group-addon">https:://kaober.com/shop/</span>
			      	  	<input type="text" class="form-control" id="slug" name="slug" value="{!! old('slug') !!}">
			      	  </div>
			      	</div>

			      	<div class="form-group">
			      	  <label for="meta_description">Meta description</label>
			      	  <input type="text" class="form-control" id="meta_description" name="meta_description" value="{!! old('meta_description') !!}">
			      	</div>

			      	<div class="form-group">
			      	  <label for="meta_keyword">Meta keyword</label>
			      	  <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="{!! old('meta_keyword') !!}">
			      	</div>

			      	<div class="form-group">
			      		<label for="status">Trạng thái kích hoạt</label>
			      	  <select class="form-control select2" style="width: 100%;" name="status" id="status" value="{!! old('status') !!}">
			      	    <option value="0">Chưa kích hoạt</option>
			      	    <option value="1">Kích hoạt</option>
			      	  </select>
			      	</div>

		      </div>
		      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
			        <button type="submit" class="btn btn-primary">Thêm mới</button>
		      </div>
		    </div><!-- /.modal-content -->
		</form>

	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->



<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) {

		// hiển thị thông báo trong 5s
		$('.alert').show().delay(5000).fadeOut();
		// bắt sự kiện dời chuột để add vào slug
		$('#title').focusout(function() {
			$('form').find("input[name='slug']").val( ChangeToSlug($(this).val()) );
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

@endsection
