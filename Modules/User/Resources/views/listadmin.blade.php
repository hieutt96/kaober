@extends('backend.master')
@section('title', 'User | Kaober.com')
@section('titlePage', 'Danh sách quản trị viên')

@section('content')

	<style type="text/css">
		.maxsize {
			max-width: 200px;
		}
	</style>
	

	<section class="content">
	    
		<div class="row">

			{{-- thông báo xóa thành công --}}
			<div class="col-xs-12">
				@include('product::layouts.success')
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
	        	      @foreach( $admins as $admin )
	        	      	<tr>
	        	      		<td>{{ $countUser++ }}</td>
	        	      		<td>{{ $admin->firstname }}</td>
	        	      		<th>
	        	      			@if( $admin->avatar == 'avatar.png' )
	        	      				<img class="profile-user-img img-responsive img-circle" src="{{ asset('files/images/avatar.png') }}">
	        	      			@else
	        	      				<img class="profile-user-img img-responsive img-circle" src="{{ asset('files/images/'.$admin->avatar) }}">
	        	      			@endif
	        	      		</th>
	        	      		<td>{{ $admin->email }}</td>
	        	      		<td class="text-red">{{ $admin->phone or 'none' }}</td>
	        	      		<td>
	        	      			@if($admin->status) 
	        	      				<small class="label bg-green">kích hoạt</small>
	        	      			@else
	        	      				<small class="label bg-yellow">chưa kích hoạt</small>
	        	      			@endif
	        	      		</td>
	        	      		<td>
	        	      			@if($admin->gender == 'MALE') 
	        	      				<small class="label bg-red">Male</small>
	        	      			@elseif ($admin->gender == 'FAMALE')
	        	      				<small class="label bg-green">Female</small>
	        	      			@else
	        	      				<small class="label bg-yellow">Female</small>
	        	      			@endif
	        	      		</td>
	        	      		<td class="maxsize">{{ $admin->address }}</td>
	        	      		<td>
	        	      				<div class="btn-group">
	        	      				  <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
	        	      				    <span class="caret"></span>
	        	      				  </button>
	        	      				  <ul class="dropdown-menu dropdown-menu-right">
	        	      				    <li><a href="{!! URL::route('admin::user::role::user', $admin->id) !!}">Người dùng</a>
	        	      				    </li>
	        	      				    <li><a href="{!! URL::route('admin::user::role::ncc', $admin->id) !!}">Nhà cung cấp</a>
	        	      				      </li>
	        	      				    <li>
	        	      				    	@if($admin->status) 
	        	      				    		<a href="{!! URL::route('admin::user::role::block', $admin->id) !!}">Khóa tài khoản</a>
	        	      				    	@else
	        	      				    		<a href="{!! URL::route('admin::user::role::open', $admin->id) !!}">Mở tài khoản</a>
	        	      				    	@endif
	        	      				    </li>
	        	      				  </ul>
	        	      				</div>
	        	      			  	{{-- <a href="#">
	        	      			  		<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
	        	      			  	</a> --}}
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


<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) {
		// hiển thị thông báo trong 5s
		$('.alert').show().delay(5000).fadeOut();
	});
</script>

@endsection
