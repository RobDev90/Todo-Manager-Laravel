@extends ('layout')

@section ('content')

	<div class="row">

		<div class="col-12">

			<h1>Task Manager</h1>
			<hr>
		
		</div>

	</div>

	<div class="row">
	
		<div class="col-md-8">

			<h2>Todays To Dos</h2>

			<hr>

			<ul style="display:flex; justify-content: space-between;">
					
			    @foreach ($todaysInCompleteTodos as $todo)

			        <li><a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a></li>

			        <div class="buttons">

				        <!-- Edit To Do -->
				        <a href="/todos/{{ $todo->id }}/edit" class="btn btn-primary">Edit</a>
				        <!-- Edit To Do --> 

				        <!-- Delete Form -->
				        <form action="{{url('todos', [$todo->id])}}" method="POST">
						    <input type="hidden" name="_method" value="DELETE">
						   <input type="hidden" name="_token" value="{{ csrf_token() }}">
						   <input type="submit" class="btn btn-danger" value="Delete"/>
						</form>
				        <!-- End of Delete Form -->

			    	</div>

			    @endforeach

			</ul>

			<hr>

			<!-- Create a new task - CTA -->
			<a href="/todos/create" class="btn btn-primary">Add new task</a>

			<hr>

		</div>

		<div class="col-md-4">

			<h3>Recently Completed To Dos</h3>

			<hr>
			
			<ul>
					
				@foreach ($lastFiveCompletedTodos as $todo)

			        <li><a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a></li>

			    @endforeach

			</ul>


		</div>

	</div>

	<div class="row">
		
		<div class="col-md-8">
			
			<h3>Your Week Ahead</h3>

			<hr>

					
			@foreach ($todosInTheNextWeek as $todos)


				<h4> {{ App\Todo::todayAndTomorrowFormatter($todos->pluck('due_date')[0]) }}  </h4>

				<hr>

				<ul>

					@foreach($todos as $todo)

			        <li><a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a></li>

			        @endforeach

		        </ul>

		    @endforeach

			
		</div>

	</div>


@endsection