@extends('layouts.app')

@section('title', 'Add Restaurant')

@section('content')

<div class="container" id="add-restaurant-form">
    <div class="row">
	<div class="col-md-12">

	    	<form action="{{ url('/restaurantOwner/storeRestaurant') }}" method="POST" enctype="multipart/form-data" role="form">

		<input type="hidden" name="_token" value = "{{ csrf_token() }}">
		
		<table>
			<col width="120">
	  		<col width="120">

			<thead>
				<tr>
					<th></th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><strong>Name:</strong></td>
					<td>
						<input type="text" name="name" class="form-control">
					</td>
				</tr>
				
				<tr>
					<td><strong>Location:</strong></td>
					<td>
						<input type="text" name="location" class="form-control">
					</td>
				</tr>

				<tr>
					<td> <strong>Email:</strong></td>
					<td>
						<input type="text" name="email" class="form-control">
					</td>
				</tr>

				<tr>
					<td> <strong>Contact NO:</strong></td>
					<td>
						<input type="text" name="contactno" class="form-control">
					</td>
				</tr>

				<tr>
					<td> <strong>Website:</strong></td>
					<td>
					    <input type="text" name="website" class="form-control">
					</td>
				</tr>
				
				<tr>
					<td> <strong>Image:</strong></td>
					<td>
						<br>
					    <input type="file" name="image">
					    <br>
					</td>
				</tr>
				
				<tr>
					<td> <strong>Description:</strong></td>
					<td>
					    <input type="textarea" name="description" class="form-control">
					</td>
				</tr>
   			</tbody>

		</table>

		<input type="submit" value="Add">
	    </form>
	</div>
    </div>
</div>


@endsection
