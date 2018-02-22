<?php

use App\Todo;


Route::get('/', 'ToDosController@index');
Route::get('/todos/{todo}', 'ToDosController@show');

