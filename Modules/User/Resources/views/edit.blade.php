@extends('backend.master')
@section('title', 'User | Kaober.com')
@section('titlePage', 'Quản lý profile')

@section('content')

<section class="content">
	<div class="row">

	<div class="col-md-12">
	  	@include('user::layouts.error')
		@include('user::layouts.success')
		@include('user::layouts.failed')
	</div>

	<div class="col-md-3">
			<div class="box box-default">
			    <div class="box-body">
		    	  
			    	<div class="box-body box-profile">
			    	  <img class="profile-user-img img-responsive img-circle" src="{{ asset('files/images/'.$user->avatar) }}" alt="User profile picture">

			    	  <h3 class="profile-username text-center">{{ $user->firstname .' '.$user->lastname  }}</h3>

			    	  <p class="text-muted text-center">{{ $user->slogan or 'Khẩu hiệu cá nhân' }}</p>

			    	  <ul class="list-group list-group-unbordered">
			    	    <li class="list-group-item">
			    	      <b>Trạng thái</b> <a class="pull-right">
			    	      	@if($user->status)
			    	      		kích hoạt
			    	      	@else
			    	      		Chưa kích hoạt
			    	      	@endif
			    	      </a>
			    	    </li>
			    	    {{-- <li class="list-group-item">
			    	      <b>Following</b> <a class="pull-right">543</a>
			    	    </li>
			    	    <li class="list-group-item">
			    	      <b>Friends</b> <a class="pull-right">13,287</a>
			    	    </li> --}}
			    	  </ul>

			    	  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-sm">Đổi mật khẩu</button>
			    	</div>

				</div>
			</div>
		</div>

		{{-- modal thay đổi password --}}
			<div class="modal fade bs-sm" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">THAY ĐỔI MẬT KHẨU</h4>
			      </div>
			      <div class="modal-body">

			        <form method="POST" action="{{ route('admin::user::update::password') }}">
			        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			        		<div class="form-group">
			        		  <label for="oldpassword">Mật khẩu cũ *</label>
			        		  <input type="password" class="form-control" id="oldpassword" name="oldpassword" required>
			        		</div>

			        		<div class="form-group">
			        		  <label for="password">Mật khẩu mới *</label>
			        		  <input type="password" class="form-control" id="password" name="password" required>
			        		</div>

			        		<div class="form-group">
			        		  <label for="retype">Nhập lại mật khẩu mới *</label>
			        		  <input type="password" class="form-control" id="retype" name="retype" required>
			        		</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>
				</form>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div>
		{{-- end modal --}}

		<div class="col-md-9">
		<form method="POST" action="{{ route('admin::user::update::profile') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="box box-default">
			  <div class="box-header with-border">
			    <h3 class="box-title">THÔNG TIN NGƯỜI DÙNG</h3> 
			    <button type="submit" class="btn btn-primary pull-right">Cập nhật thông tin</button>
			  </div>
			    <div class="box-body">
		    	  <div class="form-group">
		    	    <label for="firstname">Tên</label>
		    	    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $user->firstname }}" required>
		    	  </div>

		    	  <div class="form-group">
		    	    <label for="lastname">Họ và đệm</label>
		    	    <input type="text" class="form-control" id="lastname" name="lastname" required value="{{ $user->lastname }}">
		    	  </div>

		    	  <div class="form-group">
		    	    <label for="email">Email</label>
		    	    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled>
		    	  </div>

		    	  <div class="form-group">
		    	    <label for="phone">Số điện thoại </label>
		    	    <input type="number" class="form-control" id="phone" name="phone" required value="{{ $user->phone or null }}">
		    	  </div>

		    	  <div class="form-group">
		    	    <label for="birthday">Ngày sinh </label>
		    	    <input type="date" class="form-control" id="birthday" name="birthday" required value="{{ $user->birthday or null }}">
		    	  </div>

		    	  <div class="form-group">
		    	    <select class="form-control select2" style="width: 100%;" name="gender" id="gender" value="{{ $user->gender or 'NONE' }}">
		    	    @if($user->gender == 'NONE')
	    	    		<option value="NONE">Khác</option>
	    	    	  	<option value="MALE">Nam</option>
	    	    	  	<option value="FEMALE">Nữ</option>
	    	    	@elseif($user->gender == 'MALE')
	    	    		<option value="MALE">Nam</option>
	    	    		<option value="NONE">Khác</option>
	    	    	  	<option value="FEMALE">Nữ</option>
	    	    	@else
	    	    		<option value="FEMALE">Nữ</option>
	    	    		<option value="MALE">Nam</option>
	    	    		<option value="NONE">Khác</option>
	    	    	@endif
		    	    </select>
		    	  </div>

		    	  <div class="form-group">
		    	    <label for="address">Địa chỉ </label>
		    	    <input type="text" class="form-control" id="address" name="address" value="{{ $user->address or null }}">
		    	  </div>

		    	  <div class="form-group">
		    	    <label for="slogan">Slogan </label>
		    	    <input type="text" class="form-control" id="slogan" name="slogan" value="{{ $user->slogan or null }}">
		    	  </div>

		    	  <div class="form-group">
		    	    <label for="about">about </label>
		    	    <input type="text" class="form-control" id="about" name="about" required value="{{ $user->about or null }}">
		    	  </div>

		    	  <div class="form-group">
		    	    <label for="cardnumber">cardnumber </label>
		    	    <input type="number" class="form-control" id="cardnumber" name="cardnumber" value="{{ $user->cardnumber or null }}">
		    	  </div>

				</div>
			</div>
		</div>

</section>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) {
		$('.alert').show().delay(5000).fadeOut();
	});
</script>

@endsection
