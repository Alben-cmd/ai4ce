@extends('layouts.app')

@section('content')
 <div class="card-header">
 <h4 class="m-t-0 header-title" align="center">{{ $event_data->event_name }}</h4> </div>

 <div align="right"><h5><a href=" {{ route('event.add.picture') }} ">Add New Image to Event</a></h5></div>
 
 <div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
 </div>
			<div class="table-responsive">
				 <div class="card-header">
 <h5 class="m-t-0 header-title" align="center">Event Images</h5> </div>
				<table class="table m-0">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Image Name</th>
							<th>Caption</th>
							<th>Day</th>
						
							@php 
							$counter =1;
							@endphp
					
						</tr>
					</thead>
					<tbody>
						
								@foreach ($event as $eventImage)

						<tr>
							<td>{{ $counter ++ }} </td>
							<td>{{ $eventImage->event_image_name }}</td>
							<td>{{ $eventImage->event_image_caption }}</td>
							<td>{{ $eventImage->day }} </td>
							
							
							<td>
							<div align="right">
								
								<a href=""  class="label label-success">Update |</a>

								<a href=""  onclick="return confirm('Are you sure?')" class="label label-danger">Delete</a>
							</div>
							</td> 
							@endforeach
						</tr>
					
				
						
					</tbody>
				</table>
				
			</div>


@endsection