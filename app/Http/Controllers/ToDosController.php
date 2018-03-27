<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Carbon\Carbon;

class ToDosController extends Controller
{
    public function index() {

    	$incompleteTodos = Todo::InComplete()->get();

    	$todaysInCompleteTodos = Todo::TodaysIncompleteTodos()->get();

    	$todosInTheNextWeek = Todo::TodosInTheNextWeek()->orderBy('due_date')->get()->groupBy('due_date');

    	$lastFiveCompletedTodos = Todo::LastFiveCompletedTodos()->get();

    	return view('todos/index', compact('incompleteTodos','todaysInCompleteTodos','todosInTheNextWeek','lastFiveCompletedTodos'));

    }

    public function show(Todo $todo) {

    	return view('todos/show', compact('todo'));

    }


    public function create() {

        return view('todos/create');

    }

    public function store(Todo $todo) {

        $todo->title = request('title');
        $todo->notes = request('notes');
        $todo->due_date = request('due_date');

        $todo->save();

        return redirect('/');

    }

    public function edit(Todo $todo) {

        return view('todos/edit', compact('todo'));

    }

    public function update(Todo $todo) {

        $todo->title = request('title');
        $todo->notes = request('notes');
        $todo->due_date = request('due_date');

        $todo->save();

        return redirect('/');

    }

    public function destroy(Todo $todo) {

        $todo->delete();
        return response()->json([
            'success'=>"Todo Deleted successfully.", 
            'todo_id' => $todo->id
        ]);

        // return redirect('/');

    }

    public function setComplete(Todo $todo) {


        $todo->completed = 1;
        $todo->completed_date = Carbon::now();

        $todo->save();

        return redirect('/');
    }

    public function setIncomplete(Todo $todo) {


        $todo->completed = 0;
        $todo->completed_date = NULL;

        $todo->save();

        return redirect('/');
    }

    

}
