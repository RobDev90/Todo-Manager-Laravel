@extends ('layout')

@section ('content')


	<h1>{{ $todo->title }}</h1>

	<hr>

	<h3>Task Notes</h3>

	<p> {{ $todo->notes }} </p>

	<hr>

	<a href="/">Back</a>


@endsection