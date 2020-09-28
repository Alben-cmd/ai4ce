@extends('layouts.app')

@section('content')
 <div class="card-header">
 <h4 class="m-t-0 header-title" align="center">Add to Gallery</h4> </div>


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
  

@if(session('info'))
<div class="alert alert-success">
	{{ session('info') }}
</div>
@endif


<form method="POST" action="{{route('admin.store.gallery')}}" class="form-horizontal" enctype="multipart/form-data">
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
            <input type="text" id="gallery_caption" name="gallery_caption" class="form-control" value="{{ old('gallery_caption') }} ">
        </div>
    </div>
	<div class="col-sm-offset-2 col-sm-9">
      	<button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <br>
	
</form>





@endsection 