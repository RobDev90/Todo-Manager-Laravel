<form onsubmit="return confirm('Set this task to incomplete?');" action="{{url('todos/incomplete', [$todo->id])}}" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="todoID" value="$todo->id"/>
    <button class="btn" type="submit">
        Set as incomplete
    </button>
</form>