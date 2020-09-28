@extends('layouts.app')

@section('content')
 <div class="card-header">
 <h4 class="m-t-0 header-title" align="center">
 <a href=" {{ route('home')}} ">Gallery</a></h4> </div>

 <div align="right"><h5><a href=" {{ route('gallery.add') }} ">Add New Image</a></h5></div>
 
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
							<th>Image Title</th>
							<th>Discription</th>
						
							@php 
							$counter =1;
							@endphp
					
						</tr>
					</thead>
					<tbody>
						
								@foreach ($galleries as $gallery)

						<tr>
							<td>{{ $counter ++ }} </td>
							<td>{{ $gallery->gallery_image }}</td>
							<td>{{ $gallery->gallery_caption }}</td>
							
							
							<td>
							<div align="right">
								
								<a href="/admin/gallery/edit/{{ $gallery->id }} "  class="label label-success">Update |</a>

								<a href="/admin/gallery/delete/{{ $gallery->id }}"  onclick="return confirm('Are you sure?')" class="label label-danger">Delete</a>
							</div>
							</td> 
							@endforeach
						</tr>
					
				
						
					</tbody>
				</table>
				
			</div>


@endsection