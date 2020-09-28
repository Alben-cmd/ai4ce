@extends('layouts.app')

@section('content')
 <div class="card-header">
 <h4 class="m-t-0 header-title" align="center">
 Edit Gallery Image</h4> </div>


@if(count($errors))

<div class="form-group">
    <div class="alert alert-danger">
        <ul>
         	@foreach ($errors->all() as $error)
         	<li>{{ $error }}</li>
         	@endforeach
        </ul>
			@endif
    </div>

<form method="POST" action="{{ route('admin.gallery.edit', array($gallery->id)) }} " class="form-horizontal" enctype="multipart/form-data">
	{{ csrf_field() }}
    
	<div class="form-group m-b-0">
 		<label class="col-md-2 control-label">Image</label>
 	 		<div class="col-md-10">
 	 			<input type="file" class="filestyle" data-buttonname="btn-primary" name="gallery_image" />
 	 		</div>
 	</div>
	<div class="form-group">
        <label class="col-md-2 control-label" for="gallery_caption">Image Caption</label>
        <div class="col-md-10">
            <input type="text" id="gallery_caption" name="gallery_caption" class="form-control" value="{{ $gallery->gallery_caption }} ">
        </div>
    </div>
	<div class="col-sm-offset-2 col-sm-9">
      	<button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <br>
	
</form>





@endsection 