@extends('backend.master')
@section('title', 'Nhà cung cấp | Kaober.com')
@section('titlePage', 'Danh sách nhà cung cấp')

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
		        	      <?php $countNcc = 1; ?>
		        	      @foreach( $listNccs as $ncc )
		        	      	<tr>
		        	      		<td>{{ $countNcc++ }}</td>
		        	      		<td>{{ $ncc->firstname }}</td>
		        	      		<th>
		        	      			@if( $ncc->avatar == 'avatar.png' )
		        	      				<img class="profile-user-img img-responsive img-circle" src="{{ asset('files/images/avatar.png') }}">
		        	      			@else
		        	      				<img class="profile-user-img img-responsive img-circle" src="{{ asset('files/images/'.$ncc->avatar) }}">
		        	      			@endif
		        	      		</th>
		        	      		<td>{{ $ncc->email }}</td>
		        	      		<td class="text-red">{{ $ncc->phone or 'none' }}</td>
		        	      		<td>
		        	      			@if($ncc->status) 
		        	      				<small class="label bg-green">Mở</small>
		        	      			@else
		        	      				<small class="label bg-red">Khóa</small>
		        	      			@endif
		        	      		</td>
		        	      		<td>
		        	      			@if($ncc->gender == 'MALE') 
		        	      				<small class="label bg-red">Male</small>
		        	      			@elseif ($ncc->gender == 'FAMALE')
		        	      				<small class="label bg-green">Female</small>
		        	      			@else
		        	      				<small class="label bg-yellow">Female</small>
		        	      			@endif
		        	      		</td>
		        	      		<td class="maxsize">{{ $ncc->address }}</td>
		        	      		<td>
		        	      				<div class="btn-group">
		        	      				  <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
		        	      				    <span class="caret"></span>
		        	      				  </button>
		        	      				  <ul class="dropdown-menu dropdown-menu-right">
		        	      				  	<li><a href="{!! URL::route('admin::user::role::user', $ncc->id) !!}">Người dùng</a>
		        	      				  	</li>
		        	      				    <li><a href="{!! URL::route('admin::user::role::admin', $ncc->id) !!}">Quản trị viên</a>
		        	      				    </li>
		        	      				    <li>
		        	      				    	@if($ncc->status) 
		        	      				    		<a href="{!! URL::route('admin::user::role::block', $ncc->id) !!}">Khóa tài khoản</a>
		        	      				    	@else
		        	      				    		<a href="{!! URL::route('admin::user::role::open', $ncc->id) !!}">Mở tài khoản</a>
		        	      				    	@endif
		        	      				    </li>
		        	      				  </ul>
		        	      				</div>
		        	      			  	<a href="{!! URL::route('admin::user::delete', $ncc->id) !!}">
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


<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) {
		// hiển thị thông báo trong 5s
		$('.alert').show().delay(5000).fadeOut();

	});
</script>

@endsection
