@extends('layouts.app')

@section('content')
 <div class="card-header">
 <h4 class="m-t-0 header-title" align="center">Add Event</h4> </div>


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


<form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
	{{ csrf_field() }}
    
	<div class="form-group">
        <label class="col-md-2 control-label" for="event_name">Event Name</label>
        <div class="col-md-10">
            <input type="text" id="event_name" name="event_name" class="form-control" value="{{ old('event_name') }} ">
        </div>
    </div>
     <div class="form-group">
        <label class="col-md-2 control-label" for="event_type">Number of days</label>
        <div class="col-md-10">
          <select class="form-control" name="event_type" id="event_type">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="gallery_caption"></label>
        <div class="col-md-10">
            <input type="text" id="no_of_days" name="gallery_caption" class="form-control" value="{{ old('no_of_days') }} ">
        </div>
    </div>
     <div class="form-group">
        <label class="col-md-2 control-label" for="event_type">Event type</label>
        <div class="col-md-10">
          <select class="form-control" name="event_type" id="event_type">
            <option>Upcoming</option>
            <option>Past</option>
          </select>
        </div>
    </div>
	<div class="col-sm-offset-2 col-sm-9">
      	<button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <br>
	
</form>





@endsection 