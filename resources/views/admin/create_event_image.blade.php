@extends('layouts.app')

@section('content')
 <div class="card-header">
 <h4 class="m-t-0 header-title" align="center">Add to Event</h4> </div>


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


<form method="POST" action=" {{ route('event.store.picture') }} " class="form-horizontal" enctype="multipart/form-data">
	{{ csrf_field() }}
    
	<div class="form-group m-b-0">
 		<label class="col-md-2 control-label">Image</label>
 	 		<div class="col-md-10">
 	 			<input type="file" class="filestyle" data-buttonname="btn-primary" name="event_image_name" />
 	 		</div>
 	</div>
	<div class="form-group">
        <label class="col-md-2 control-label" for="event_image_caption">Image Caption</label>
        <div class="col-md-10">
            <input type="text" id="event_image_caption" name="event_image_caption" class="form-control" value=" ">
            <input type="hidden" value="1" id="id" class="qty2 form-control" name="event_id">
            
        </div>
    </div>
     <div class="form-group">
        <label class="col-md-2 control-label" for="event_type">Day of the Event</label>
        <div class="col-md-10">
          <select class="form-control" name="day" id="day">
            <option>Arrival</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>Poster</option>
          </select>
        </div>
    </div>
	<div class="col-sm-offset-2 col-sm-9">
      	<button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <br>
	
</form>





@endsection 