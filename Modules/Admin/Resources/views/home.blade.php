@extends('backend.master')
@section('title', 'Trang chủ | Kaober.com')
@section('titlePage', 'Trang chủ')
@section('content')
	

	<section class="content">
	      {{-- Small boxes (Stat box) --}}
	      <div class="row">
	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-aqua">
	            <div class="inner">
	              <h3>{{ $invoices }}</h3>

	              <p>Số lượng đơn hàng</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-bag"></i>
	            </div>
	            <a href="{{ route('admin::invoice::lists') }}" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>

	        <!-- ./col -->
	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-green">
	            <div class="inner">
	              <h3>{{ $users }}</h3>

	              <p>Số lượng người dùng</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-users"></i>
	            </div>
	            <a href="{{ route('admin::user::lists') }}" class="small-box-footer">Xem chi tiết<i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->

	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-yellow">
	            <div class="inner">
	              <h3>{{ $products }}</h3>

	              <p>Số lượng sản phẩm</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-shopping-cart"></i>
	            </div>
	            <a href="{{ route('admin::product::lists') }}" class="small-box-footer">Xem chi tiết<i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-red">
	            <div class="inner">
	              <h3>{{ $posts }}</h3>

	              <p>Số lượng bài viết</p>
	            </div>
	            <div class="icon">
	              <i class="fa fa-newspaper-o"></i>
	            </div>
	            <a href="{{ route('admin::blog::lists') }}" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
	      </div>
	      <!-- /.row -->

      		<div class="row">
      	        <div class="col-xs-12">

      	        	<div class="box">

      	        	  <div class="box-header">
      	        	    <h3 class="box-title">HOẠT ĐỘNG CỦA ADMIN</h3>
      	        	  </div>
      	        	  {{-- /.box-header --}}
      	        	  <div class="box-body">
      	        	    <table id="list" class="table table-bordered table-striped">
      	        	      <thead>
      	        	      <tr>
      	        	      	<th>#</th>
      	        	        <th>Admin id</th>
      	        	        <th>email</th>
      	        	        {{-- <th>IP</th> --}}
      	        	        <th>action</th>
      	        	        <th>description</th>
      	        	        <th>type</th>
      	        	        <th>Time</th>
      	        	      </tr>
      	        	      </thead>
      	        	      <tbody>
      	        	      	<?php $countLog = 1; ?>
      	        	      	@foreach( $logs as $log )
      	        	      		<tr>
      	        	      			<td>{{ $countLog++ }}</td>
      	        	      			<td>{{ $log->user_id }}</td>
      	        	      			<td>{{ $log->email }}</td>
      	        	      			{{-- <td>{{ $log->ip }}</td> --}}
      	        	      			<td>
      	        	      				@if( $log->action == 'Deleted' )
      	        	      					<small class="label label-danger">{{ $log->action }}</small>
      	        	      				@else
      	        	      					<small class="label label-success">{{ $log->action }}</small>
      	        	      				@endif
      	        	      			</td>
      	        	      			<td>{{ $log->description }}</td>
      	        	      			<td class="text-blue">{{ $log->type }}</td>
      	        	      			<td>{{ $log->created_at }}</td>
      	        	      		</tr>
      	        	      	@endforeach
      	        	      </tbody>
      	                <tfoot>
      	                <tr>
      	        	      	<th>#</th>
      	        	        <th>Admin id</th>
      	        	        <th>email</th>
      	        	        {{-- <th>IP</th> --}}
      	        	        <th>action</th>
      	        	        <th>description</th>
      	        	        <th>type</th>
      	        	        <th>Time</th>
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


@endsection
