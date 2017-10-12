@extends('backend.master')
@section('title', 'Invoice | Kaober.com')
@section('titlePage', 'Danh sách đơn hàng bị hủy')
@section('buttonAdd')
    <ol class="breadcrumb">
        <a href="{{ route('admin::invoice::add') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tạo đơn hàng mới</button></a>
    </ol><br>
@endsection
@section('content')
<section class="content">
	<section class="content">
	    
		<div class="row">
	        <div class="col-xs-12">

	        	<div class="box">

	        	  <div class="box-header">
	        	    {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
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
		        	        <th>Tổng tiền (VNĐ)</th>
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
		        	        <td class="text-red">
		        	        	@php
		        	        		$totals = 0;
		        	        		foreach( $order->productOrders as $total ) 
		        	        			$totals += $total->price*$total->quantity;
		        	        	@endphp
		        	        		{{ number_format( $totals,3,'.',',') }}
		        	        </td>
		        	        <td>
		        	        	<div class="btn-group">
		        	        	  <a href=""><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>
		        	        	  <a href="{!! URL::route('admin::invoice::print', $order->order_id) !!}" target="_blank"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-print"></i></button></a>
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
	                  	<th>Tổng tiền</th>
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

