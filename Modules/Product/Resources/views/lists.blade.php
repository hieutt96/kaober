@extends('backend.master')
@section('title', 'Product | Kaober.com')
@section('titlePage', 'Danh sách sản phẩm')
@section('buttonAdd')
    <ol class="breadcrumb">
        <a href="{{ route('admin::product::add') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm Mới</button></a>
    </ol><br>
@endsection
@section('content')
	
	<section class="content">
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
		        	        <th>Tên sản phẩm</th>
		        	        <th>Ảnh</th>
		        	        <th>Giá (VNĐ)</th>
		        	        <th>Danh mục</th>
		        	        <th>Trạng thái</th>
		        	        <th>NCC</th>
		        	        <th>#</th>
		        	      </tr>
		        	      </thead>
		        	      <tbody>
		        	      <?php $countProduct = 1; ?>
		        	      	@foreach( $products as $product )
			        	      <tr>
			        	      	<td>{{ $countProduct++ }}</td>
			        	      	<td style="max-width: 150px;">{{ $product->title }}</td>
			        	      	<td>
			        	      		<img style="max-width: 150px;" src="{!! asset('files/images/'.$product->thumbnail) !!}">
			        	      	</td>
			        	        <td class="text-red">{{ number_format($product->price,3,'.',',') }}</td>
			        	        <td>
			        	        	 {{ $product->category->title }}
			        	        </td>
			        	        <td>
			        	        	@if($product->status) 
			        	        		<small class="label bg-green">Hiển thị</small>
			        	        	@else
			        	        		<small class="label bg-yellow">Ẩn</small>
			        	        	@endif
			        	        </td>
			        	        <td class="text-blue">
			        	        	{{ $product->shop->title }}
			        	        </td>
			        	        <td>
			        	        	<div class="btn-group">
			        	        		<a href="{{ route('frontend.product', $product->slug) }}" target="_blank">
			        	        			<button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
			        	        		</a>
			        	        		<a href="{!! URL::route('admin::product::edit', $product->product_id) !!}">
			        	        			<button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
			        	        		</a>
			        	        	  	<a href="{!! URL::route('admin::product::delete', $product->product_id) !!}">
			        	        	  		<button onclick="return confirmDelete('Bạn có chắc chắn muốn xóa hem?')" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
			        	        	  	</a>
			        	        	</div>
			        	        </td>
			        	      </tr>
		        	      	@endforeach
		        	      </tbody>
		                <tfoot>
		                <tr>
		                  	  <th>#</th>
		                  	  <th>Tên sản phẩm</th>
		                  	  <th>Ảnh</th>
		                  	  <th>Giá (VNĐ)</th>
		                  	  <th>Danh mục</th>
		                  	  <th>Trạng thái</th>
		                  	  <th>NCC</th>
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
