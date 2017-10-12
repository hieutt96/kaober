@extends('backend.master')
@section('title', 'Invoice | Kaober.com')
@section('titlePage', 'Danh sách đơn hàng')
@section('buttonAdd')
    <ol class="breadcrumb">
        <a href="{{ route('admin::invoice::add') }}" target="blank"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tạo đơn hàng</button></a>
        <a href="#"><button type="button" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i>  Xuất thông tin khách hàng</button></a>
    </ol><br>
@endsection
@section('content')
<section class="content">
	<section class="content">
	    
		<div class="row">

			{{-- thông báo--}}
			<div class="col-xs-12">
			  	@include('invoice::layouts.error')
				@include('invoice::layouts.success')
				@include('invoice::layouts.failed')
			</div>

	        <div class="col-xs-12">
	        	<div class="box">
	        	  <div class="box-header">
	        	  </div>
	        	  <!-- /.box-header -->
	        	  <div class="box-body">
	        	    <table id="list" class="table table-bordered table-striped">
	        	      <thead>
		        	      <tr>
		        	      	<th>#</th>
		        	        <th>Mã đơn hàng</th>
		        	        <th>Tên</th>
		        	        <th>SĐT</th>
		        	        <th>Email khách hàng</th>
		        	        <th>Country</th>
		        	        <th>City</th>
		        	        <th>Địa chỉ</th>
		        	        <th>Tình trạng</th>
		        	        <th>Tổng tiền (VNĐ)</th>
		        	        <th>Time</th>
		        	        <th>#</th>
		        	      </tr>
	        	      </thead>
	        	      <tbody>
	        	      	<?php $countOrder = 1; ?>
	        	      	@foreach( $orders as $order )
		        	      <tr>
		        	        <td>{{ $countOrder++ }}</td>
		        	        <td>{{ $order->keyorder }}</td>
		        	        <td>{{ $order->name }}</td>
		        	        <td>{{ $order->phone }}</td>
		        	        <td>{{ $order->email }}</td>
		        	        <td>{{ $order->country }}</td>
		        	        <td>{{ $order->city }}</td>
		        	        <td>{{ $order->address }}</td>
		        	        <td>
		        	        	@if($order->status == 1)
		        	        		<small class="label bg-green">Thành công</small>
		        	        	@elseif($order->status == 2)
		        	        		<small class="label bg-yellow">Đang xử lý</small>
		        	        	@elseif($order->status == 3)
		        	        		<small class="label bg-red">Đã hủy</small>
		        	        	@elseif($order->status == 0)
		        	        		<small class="label bg-blue">Chờ xử lý</small>
		        	        	@endif
		        	        </td>
		        	        <td class="text-red">
			        	        @php
			        	        	$totals = 0;
			        	        	foreach( $order->productOrders as $total ) 
			        	        		$totals += $total->price*$total->quantity;
			        	        @endphp
			        	        	{{ number_format( $totals,3,'.',',') }}
		        	        </td>
		        	        <td>{{ $order->created_at }}</td>
		        	        <td>

		        	        	<div class="btn-group">

			        	        	  <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
			        	        	    <span class="caret"></span>
			        	        	  </button>
			        	        	  <ul class="dropdown-menu dropdown-menu-right">
			        	        	  	@if($order->status == 1)
			        	        	  			<li><a href="{!! URL::route('admin::invoice::notprocess::order', $order->order_id) !!}">Chưa xử lý</a>
			        	        	  		    </li>
			        	        	  	@elseif($order->status == 0)
				        	        	  	<li><a href="{!! URL::route('admin::invoice::processing::order', $order->order_id) !!}">Bắt đầu xử lý đơn hàng</a>
				        	        	  	</li>
				        	        	    <li><a href="{!! URL::route('admin::invoice::cancel::order', $order->order_id) !!}">Hủy đơn hàng</a>
				        	        	    </li>
				        	        	@elseif($order->status == 2)
				        	        		<li><a href="{!! URL::route('admin::invoice::success::order', $order->order_id) !!}">Đơn hàng thành công</a>
				        	        	  	</li>
				        	        	    <li><a href="{!! URL::route('admin::invoice::cancel::order', $order->order_id) !!}">Hủy đơn hàng</a>
				        	        	    </li>
				        	        	@elseif($order->status == 3)
				        	        		<li><a href="{!! URL::route('admin::invoice::notprocess::order', $order->order_id) !!}">Chưa xử lý</a>
				        	        	    </li>
				        	        	@endif
			        	        	  </ul>

			        	        	  {{-- <a href=""><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a> --}}

			        	        	  <a href="{!! URL::route('admin::invoice::view::order', $order->order_id) !!}" target="_blank">
			        	        	  	<button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
			        	        	  </a>

			        	        	  <a href="{!! URL::route('admin::invoice::print', $order->order_id) !!}" target="_blank"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-print"></i></button></a>
		        	        	</div>
		        	        </td>
		        	      </tr>
	        	      	@endforeach
	        	      </tbody>
	                <tfoot>
	                <tr>
	                	<th>#</th>
	                  	<th>Mã đơn hàng</th>
	                  	<th>Tên</th>
	                  	<th>SĐT</th>
	                  	<th>Email khách hàng</th>
	                  	<th>Country</th>
	                  	<th>City</th>
	                  	<th>Địa chỉ</th>
	                  	<th>Tình trạng</th>
	                  	<th>Tổng tiền</th>
	                  	<th>Time</th>
	                  	<th>#</th>
	                </tr>
	                </tfoot>
	        	    </table>
	        	  </div>
	        	  <!-- /.box-body -->
	        	</div>
	        	<!-- /.box -->
	        </div>
	    </div>
	</section>
</section>
@endsection
