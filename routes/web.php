<?php

use App\Todo;


//Overview Route (Home)
//Shows all incomplete todos
Route::get('/', function () {
    
	//$todos = DB::table('todos')->get();
	
	$todos = Todo::incomplete()->get();
	//$todos = Todo::complete()->complete()->RecentlyCompletedTodos()->get();

    return view('overview', compact('todos'));
});


//Route to individual todo
Route::get('/todos/{todo}', function($id) {

	//$todo = DB::table('todos')->find($id);
	
	$todo = Todo::find($id);

	return view('todos/show', compact('todo'));

});
