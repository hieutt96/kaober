@extends('backend.master')
@section('title', 'Theme Setting admin | Kaober.com')
@section('titlePage', 'Cài đặt giao diện admin')

@section('content')
<section class="content">
	<div class="row">

		<div class="col-md-4">
			<div class="box box-default">
			  <div class="box-header with-border">
			    <h3 class="box-title">TÙY CHỈNH GIAO DIỆN ADMIN</h3>
			    <div class="box-tools pull-right">
			      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			    </div>
			  </div>

			    <div class="box-body">
			    	<div class="dropdown">
			    	  <button class="btn btn-default btb-block dropdown-toggle" type="button" data-toggle="dropdown">Chọn một giao diện admin
			    	  <span class="caret"></span></button>
			    	  <ul class="dropdown-menu">
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-green') !!}">Đen - Xanh lá</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-green-light') !!}">Trắng - Xanh lá</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-blue') !!}">Đen - Xanh da trời</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-blue-light') !!}">Trắng - Xanh da trời</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-red') !!}">Đen - Đỏ</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-red-light') !!}">Trắng - Đỏ</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-yellow') !!}">Đen - Vàng</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-yellow-light') !!}">Trắng - Vàng</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-purple') !!}">Đen - Tím</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-purple-light') !!}">Trắng - Tím</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-black') !!}">Đen - Trắng</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::theme::name', 'skin-black-light') !!}">Trắng - Đen</a></li>
			    	  </ul>
			    	</div>
			    </div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="box box-default">
			  <div class="box-header with-border">
			    <h3 class="box-title">TÙY CHỈNH LAYOUT ADMIN</h3>
			    <div class="box-tools pull-right">
			      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			    </div>
			  </div>

			    <div class="box-body">
			    	<div class="dropdown">
			    	  <button class="btn btn-default btb-block dropdown-toggle" type="button" data-toggle="dropdown">Chọn loại layout
			    	  <span class="caret"></span></button>
			    	  <ul class="dropdown-menu">
			    	    <li><a href="{!! URL::route('admin::settingadmin::sidebar::name', 'fixed') !!}">Cố định thanh bên sidebar</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::sidebar::name', 'nofixed') !!}">Không cố định thanh bên sidebar</a></li>
			    	  </ul>
			    	</div>
			    </div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="box box-default">
			  <div class="box-header with-border">
			    <h3 class="box-title">TÙY CHỈNH ĐÓNG MỞ THANH MENU</h3>
			    <div class="box-tools pull-right">
			      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			    </div>
			  </div>

			    <div class="box-body">
			    	<div class="dropdown">
			    	  <button class="btn btn-default btb-block dropdown-toggle" type="button" data-toggle="dropdown">Chọn loại sidebar
			    	  <span class="caret"></span></button>
			    	  <ul class="dropdown-menu">
			    	    <li><a href="{!! URL::route('admin::settingadmin::collapse::name', 'sidebar-collapse') !!}">Thu nhỏ thanh sidebar</a></li>
			    	    <li><a href="{!! URL::route('admin::settingadmin::collapse::name', 'no-sidebar-collapse') !!}">Mở rộng thanh sidebar</a></li>
			    	  </ul>
			    	</div>
			    </div>
			</div>
		</div>
		
	</div>
</section>

@endsection