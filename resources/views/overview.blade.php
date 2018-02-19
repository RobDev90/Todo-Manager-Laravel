<h1>Overview View.</h1>

<ul>

    @foreach ($todos as $todo)

        <li>{{ $todo->title }}</li>

    @endforeach

</ul>