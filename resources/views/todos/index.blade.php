@extends ('layout')

@section ('content')

	<div class="row">
	
		<div class="col-md-9">

			<h2>Todays To Dos</h2>

			<hr>

			<ul class="task-overview">

				@if(!$todaysInCompleteTodos->isEmpty())
					
				    @foreach ($todaysInCompleteTodos as $todo)

				        <li>

					        <a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a>

					        <ul class="buttons">

						        <li> @include ('partials.todos.complete') </li>

						        <li> @include ('partials.todos.edit') </li>

						        <li> @include ('partials.todos.delete') </li>

					    	</ul>

				    	</li>

				    @endforeach

				@else

			   	<p>You have no tasks due today....relax!</p>

			   	@endif


			</ul>

			<hr>

			<!-- Create a new task - CTA -->
			<a href="/todos/create" class="btn btn-primary">Add new task</a>

			<hr>

		</div>

		<div class="col-md-3">

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