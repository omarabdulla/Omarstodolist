<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/', 'TodoController@create');  // create new todo item
Route::put('/{id}', 'TodoController@edit'); // edit a todo item
Route::delete('/{id}', 'TodoController@remove'); // remove todo item
Route::get('/', 'TodoController@list'); // list all todo (not archived) items
Route::put('/{id}/archive', 'TodoController@archive'); // archive item
Route::get('/archived', 'TodoController@listArchived'); // list all todo archived items
