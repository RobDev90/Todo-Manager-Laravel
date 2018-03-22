<?php

use App\Todo;

Route::get('/', 'ToDosController@index');
Route::get('/todos/create', 'ToDosController@create');
Route::get('/todos/{todo}', 'ToDosController@show');
Route::get('/todos/{todo}/edit', 'ToDosController@edit');
Route::put('/todos/{todo}', 'ToDosController@update');
Route::patch('/todos/{todo}', 'ToDosController@setComplete');
Route::get('/todos', 'ToDosController@index');
Route::post('/todos', 'ToDosController@store');
Route::delete('/todos/{todo}', 'ToDosController@destroy');

