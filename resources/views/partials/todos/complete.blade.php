<form action="{{url('todos', [$todo->id])}}" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="todoID" value="$todo->id"/>
    <button class="btn btn-success" type="submit">
        Complete
    </button>
</form>