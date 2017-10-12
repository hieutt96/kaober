@extends('backend.master')
@section('title', 'User | Kaober.com')
@section('titlePage', 'Danh sách người dùng')

{{-- hiển thị popup thêm người dùng --}}
@section('buttonAdd')
    <ol class="breadcrumb">
        <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".addUser" name="addUser" id="addUser"><i class="fa fa-plus"></i> Thêm Mới</button></a>
        
        <a href="#"><button type="button" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i>  Xuất thông tin khách hàng</button></a>
    </ol><br>
@endsection

@section('content')

	<style type="text/css">
		.maxsize {
			max-width: 200px;
		}
	</style>
	
	<section class="content">
		<section class="content">
		    
			<div class="row">

				{{-- thông báo xóa thành công --}}
				<div class="col-xs-12">
					{{-- thông báo lỗi về request--}}
				  	@include('blog::layouts.error')

					{{-- thành công --}}
					@include('blog::layouts.success')

					{{-- thông báo lỗi thêm--}}
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
		        	        <th>Tên</th>
		        	        <th>avatar</th>
		        	        <th>Email</th>
		        	        <th>Phone</th>
		        	        <th>Trạng thái</th>
		        	        <th>giới tính</th>
		        	        <th>Địa chỉ</th>
		        	        <th>#</th>
		        	      </tr>
		        	      </thead>
		        	      <tbody>
		        	      <?php $countUser = 1; ?>
		        	      @foreach( $users as $user )
		        	      	<tr>
		        	      		<td>{{ $countUser++ }}</td>
		        	      		<td>{{ $user->firstname }}</td>
		        	      		<th>
		        	      			@if( $user->avatar == 'avatar.png' )
		        	      				<img class="profile-user-img img-responsive img-circle" src="{{ asset('files/images/avatar.png') }}">
		        	      			@else
		        	      				<img class="profile-user-img img-responsive img-circle" src="{{ asset('files/images/'.$user->avatar) }}">
		        	      			@endif
		        	      		</th>
		        	      		<td>{{ $user->email }}</td>
		        	      		<td class="text-red">{{ $user->phone or 'none' }}</td>
		        	      		<td>
		        	      			@if($user->status) 
		        	      				<small class="label bg-green">Mở</small>
		        	      			@else
		        	      				<small class="label bg-red">Khóa</small>
		        	      			@endif
		        	      		</td>
		        	      		<td>
		        	      			@if($user->gender == 'MALE') 
		        	      				<small class="label bg-red">Male</small>
		        	      			@elseif ($user->gender == 'FAMALE')
		        	      				<small class="label bg-green">Female</small>
		        	      			@else
		        	      				<small class="label bg-yellow">Female</small>
		        	      			@endif
		        	      		</td>
		        	      		<td class="maxsize">{{ $user->address }}</td>
		        	      		<td>
		        	      				<div class="btn-group">
		        	      				  <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
		        	      				    <span class="caret"></span>
		        	      				  </button>
		        	      				  <ul class="dropdown-menu dropdown-menu-right">
		        	      				  	<li><a href="{!! URL::route('admin::user::role::ncc', $user->id) !!}">Nhà cung cấp</a>
		        	      				    </li>
		        	      				    <li><a href="{!! URL::route('admin::user::role::admin', $user->id) !!}">Quản trị viên</a>
		        	      				    </li>
		        	      				    <li>
		        	      				    	@if($user->status) 
		        	      				    		<a href="{!! URL::route('admin::user::role::block', $user->id) !!}">Khóa tài khoản</a>
		        	      				    	@else
		        	      				    		<a href="{!! URL::route('admin::user::role::open', $user->id) !!}">Mở tài khoản</a>
		        	      				    	@endif
		        	      				    </li>
		        	      				  </ul>
		        	      				</div>
		        	      			  	<a href="{!! URL::route('admin::user::delete', $user->id) !!}">
		        	      			  		<button onclick="return confirmDelete('Bạn có chắc chắn muốn xóa Không?')" type="button" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i></button>
		        	      			  	</a>
		        	      		</td>
		        	      	</tr>
		        	      @endforeach
		        	      </tbody>
		                <tfoot>
		                <tr>
		                  	<th>#</th>
		        	        <th>Tên</th>
		        	        <th>avatar</th>
		        	        <th>Email</th>
		        	        <th>Phone</th>
		        	        <th>Trạng thái</th>
		        	        <th>giới tính</th>
		        	        <th>Địa chỉ</th>
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


	{{-- THÊM THÀNH VIÊN MỚI --}}
	<div class="modal fade addUser" id="addUser" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	 	<form role="form" method="POST" action="" enctype="multipart/form-data">
	 		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Thêm người dùng</h4>
		      </div>
		      <div class="modal-body">
		        
			      	<div class="form-group">
			      	  <label for="firstname">Tên *</label>
			      	  <input type="text" class="form-control" id="firstname" name="firstname" required>
			      	</div>

			      	<div class="form-group">
			      	  <label for="lastname">Họ và đệm *</label>
			      	  <input type="text" class="form-control" id="lastname" name="lastname" required>
			      	</div>

			      	<div class="form-group">
			      	  <label for="email">Email *</label>
			      	  <input type="text" class="form-control" id="email" name="email" required>
			      	</div>

			      	<div class="form-group">
			      	  <label for="password">Password *</label>
			      	  <input type="password" class="form-control" id="password" name="password" required>
			      	</div>

			      	<div class="form-group">
			      		<label for="status">Trạng thái tài khoản</label>
			      	  <select class="form-control select2" style="width: 100%;" name="status" id="status" value="{!! old('status') !!}">
			      	    <option value="0">Chưa kích hoạt</option>
			      	    <option value="1">Kích hoạt</option>
			      	  </select>
			      	</div>

			      	<div class="form-group">
			      		<label for="level">Cấp độ tài khoản</label>
			      	  <select class="form-control select2" style="width: 100%;" name="level" id="level" value="{!! old('level') !!}">
			      	    <option value="0">Người dùng</option>
			      	    <option value="1">Quản trị viên</option>
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

	});
</script>

@endsection
