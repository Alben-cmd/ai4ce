@extends('layouts.app')

@section('content')
 <div class="card-header">
 <h4 class="m-t-0 header-title" align="center">
 <a href=" {{ route('home')}} ">Event</a></h4> </div>

 <div align="right"><h5><a href=" ">Add New Event</a></h5></div>
 
 <div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
 </div>
			<div class="table-responsive">
				<table class="table m-0">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Event Name</th>
							<th>Number of Days</th>
							<th>Event Type</th>
						
							@php 
							$counter =1;
							@endphp
					
						</tr>
					</thead>
					<tbody>
						
								@foreach ($events as $event)

						<tr>
							<td>{{ $counter ++ }} </td>
							<td>{{ $event->event_name }}</td>
							<td>{{ $event->no_of_days }}</td>
							<td>{{ $event->event_type }} </td>
							
							
							<td>
							<div align="right">
								<a href="/admin/event/{{$event->id}}" class="label label-primary">Read |</a>
								
								<a href=""  class="label label-success">Update |</a>

								<a href="#"  onclick="return confirm('Are you sure?')" class="label label-danger">Delete</a>
							</div>
							</td> 
							@endforeach
						</tr>
					
				
						
					</tbody>
				</table>
				
			</div>


@endsection