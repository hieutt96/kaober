@extends('backend.master')
@section('title', 'File manager | Kaober.com')
@section('titlePage', 'Quản lý file')

@section('buttonAdd')
    <ol class="breadcrumb">
        <a href="" target="blank"><button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Upload</button></a>

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
        		        	    @foreach (File::allFiles(public_path().'/files/images/') as $file)
                                {{-- <div style="border: 2px solid #f1f1f1; margin: 10px 10px 10px 10px; width: 200px; height: 250px; float: left;">
    	                            <img style="  float: left; max-width: 200px; max-height: 200px; " class="img-responsive" src="{{ asset('files/images/'.$file->getRelativePathName()) }}">
                                </div> --}}
        		        	    @endforeach
        		        	  </div>
        		        	  <!-- /.box-body -->
    		        	</div>
		        </div>
		    </div>

		</section>
	</section>

@endsection
