<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<h1>Contact Book</h1>
<a href="{{URL::to('/')}}" class="btn btn-primary">Home</a></hr>
<a href="{{URL::to('/insert-data')}}" class="btn btn-primary">Add New</a>
<table class="table table-border">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Description</th>
		<th>Action</th>
	</tr>
 @foreach($datas as $data)
      
      <tr>
		<td>{{ $data->id }}</td>
		<td>{{ $data->name }}</td>
		<td>{{ $data->phone }}</td>
		<td>{{ $data->email }}</td>
		<td>{{ $data->description }}</td>
		<td>
			<a href="{{URL::to('edit-contact/'.$data->id)}}" class="btn btn-info">Edit</a>
			<a href="{{ URL::to('delete-contact/'.$data->id) }}" class="btn btn-danger">Delete</a>
			<a href="{{URL::to('view-contact/'.$data->id)}}" class="btn btn-primary">View</a>
		</td>
	</tr>
	@endforeach
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>