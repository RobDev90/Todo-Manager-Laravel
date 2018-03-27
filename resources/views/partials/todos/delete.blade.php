<form onsubmit="return confirm('Are you sure you wish to delete this task?');" action="{{url('todos', [$todo->id])}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-danger" value="Delete"/>
</form>