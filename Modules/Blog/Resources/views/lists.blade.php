@extends('backend.master')
@section('title', 'Blog | Kaober.com')
@section('titlePage', 'Danh sách bài viết')
@section('buttonAdd')
    <ol class="breadcrumb">
        <a href="{{ route('admin::blog::add') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm Mới</button></a>
    </ol><br>
@endsection
@section('content')

	<style type="text/css">

		.smallsize {
			max-width: 150px;
		}
		.minsize {
			min-width: 150px;
		}
		.mediumsize {
			max-width: 200px;
		}
		.contentsize {
			max-width: 300px;
		}
	</style>

	<section class="content">
		<section class="content">
		    
			<div class="row">

				<div class="col-md-12">
					{{--thông báo cập nhật bài viết thành công --}}
					@include('blog::layouts.success')
					{{-- thông báo lỗi về xóa blog --}}
					@include('blog::layouts.failed')
				</div>

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
		        	        <th>Tiêu đề</th>
		        	        <th>Ảnh</th>
		        	        <th>Danh mục</th>
		        	        <th>Nội dung</th>
		        	        <th>Thời gian</th>
		        	        <th>Trạng thái</th>
		        	        <th>#</th>
		        	      </tr>
		        	      </thead>
		        	      <tbody>
		        	      	<?php $countPost = 1; ?>
		        	      	@foreach( $posts as $post )
			        	      <tr>
			        	      	<td>{{ $countPost++ }}</td>
			        	      	<td class="smallsize">{{ $post->title }}</td>
			        	      	<td>
			        	      		<img style="max-width: 150px;" src="{!! asset('files/images/'.$post->thumbnail) !!}">
			        	      	</td>
			        	        <td>{{ $post->category->title }}</td>
			        	        <td class="contentsize">{!! str_limit($post->content, 400) !!}</td>
			        	        <td>
			        	        	<?php
	        							echo \Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->diffForHumans();
	        						?>
			        	        </td>
			        	        <td>
			        	        	@if($post->status) 
			        	        		<small class="label bg-green">Hiển thị</small>
			        	        	@else
			        	        		<small class="label bg-yellow">Ẩn</small>
			        	        	@endif
			        	        </td>
			        	        <td class="minsize">
			        	        	<div class="btn-group">
			        	        		<a href="{{ route('frontend.blog.post', $post->slug) }}" target="_blank">
			        	        			<button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
			        	        		</a>
			        	        		<a href="{!! URL::route('admin::blog::edit', $post->post_id) !!}">
			        	        			<button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
			        	        		</a>
			        	        	  	<a href="{!! URL::route('admin::blog::delete', $post->post_id) !!}">
			        	        	  		<button onclick="return confirmDelete('Bạn có chắc chắn muốn xóa Không?')" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
			        	        	  	</a>
			        	        	</div>
			        	        </td>
			        	      </tr>
		        	      	@endforeach
		        	      </tbody>
		                <tfoot>
		                <tr>
		                  	<th>#</th>
		        	        <th>Tiêu đề</th>
		        	        <th>Ảnh</th>
		        	        <th>Danh mục</th>
		        	        <th>Nội dung</th>
		        	        <th>Thời gian</th>
		        	        <th>Trạng thái</th>
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

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) {
		// hiển thị thông báo trong 5s
		$('.alert').show().delay(5000).fadeOut();
	});
</script>

@endsection
