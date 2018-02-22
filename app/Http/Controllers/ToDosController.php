<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class ToDosController extends Controller
{
    public function index() {

    	$incompleteTodos = Todo::InComplete()->get();

    	$todaysInCompleteTodos = Todo::TodaysIncompleteTodos()->get();

    	$todosInTheNextWeek = Todo::TodosInTheNextWeek()->get()->groupBy('due_date');

    	$lastFiveCompletedTodos = Todo::LastFiveCompletedTodos()->get();

    	return view('overview', compact('incompleteTodos','todaysInCompleteTodos','todosInTheNextWeek','lastFiveCompletedTodos'));

    }

    public function show(Todo $todo) {

    	return view('todos/show', compact('todo'));

    }

    

}
