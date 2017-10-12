@extends('backend.master')
@section('title', 'User | Kaober.com')
@section('titlePage', 'Hoạt động người dùng')

@section('content')
	<section class="content">
	    <div class="row">
	    	<div class="col-xs-12">

	    		<div class="box">

	    		  <div class="box-header">
	    		    <h3 class="box-title">HOẠT ĐỘNG CỦA NGƯỜI DÙNG</h3>
	    		  </div>
	    		  {{-- /.box-header --}}
	    		  <div class="box-body">
	    		    <table id="list" class="table table-bordered table-striped">
	    		      <thead>
	    		      <tr>
	    		      	<th>#</th>
	    		        <th>User id</th>
	    		        <th>email</th>
	    		        <th>IP</th>
	    		        <th>action</th>
	    		        <th>description</th>
	    		        <th>type</th>
	    		        <th>Time</th>
	    		      </tr>
	    		      </thead>
	    		      <tbody>
	    		      </tbody>
	    	        <tfoot>
	    	        <tr>
	    		      	<th>#</th>
	    		        <th>User id</th>
	    		        <th>email</th>
	    		        <th>IP</th>
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
