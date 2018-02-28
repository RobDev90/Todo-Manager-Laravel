@extends ('layout')

@section ('content')


	<div class="row">
		
		<div class="col-12">
			<h2>Add a new to-do:</h2>
			<hr>
			<form method="POST" action="/todos">

				{{ csrf_field() }}

				<div class="form-group">
				  	<label for="formTitle">Title</label>
				    <input type="text" class="form-control" id="formTitle" name="title">
				</div>
				<div class="form-group">
				    <label for="formNotes">Notes</label>
				    <textarea class="form-control" id="formNotes" name="notes"></textarea>
				</div>
				<div class="form-group">
				    <label for="formDueDate">Due Date</label>
				    <input type="date" class="form-control" id="formDueDate" name="due_date">
				</div>

  				<button type="submit" class="btn btn-primary">Add to-do</button>
			</form>

			<a href="/">Back</a>
		</div>

	</div>


@endsection