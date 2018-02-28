@extends ('layout')

@section ('content')


	<div class="row">
		
		<div class="col-12">
			<h2>Add a new to-do:</h2>
			<hr>
			<form action="{{url('todos', [$todo->id])}}" method="POST">

				<input type="hidden" name="_method" value="PUT">

				{{ csrf_field() }}

				<div class="form-group">
				  	<label for="formTitle">Title</label>
				    <input type="text" class="form-control" id="formTitle" name="title" value="{{ $todo->title }}">
				</div>
				<div class="form-group">
				    <label for="formNotes">Notes</label>
				    <textarea class="form-control" id="formNotes" name="notes">{{ $todo->notes }}</textarea>
				</div>
				<div class="form-group">
				    <label for="formDueDate">Due Date</label>
				    <input type="date" class="form-control" id="formDueDate" name="due_date" value="{{ $todo->due_date }}">
				</div>

  				<button type="submit" class="btn btn-primary">Edit</button>
			</form>

			<a href="/">Back</a>
		</div>

	</div>


@endsection