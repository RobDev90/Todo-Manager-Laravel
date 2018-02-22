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

			<ul>
					
			    @foreach ($todaysInCompleteTodos as $todo)

			        <li><a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a></li>

			    @endforeach

			</ul>

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