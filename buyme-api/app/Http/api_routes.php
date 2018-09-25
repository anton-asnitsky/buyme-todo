<?php

/**
 * Defines GET metohod for todos list
 */
Route::get('todos', 'TodoController@index');

/**
 * Defines GET method to get particular totdo
 */
Route::get('todos/{todo}', 'TodoController@show');

/**
 * Defines POST to create new todo item
 */
Route::post('todos', 'TodoController@store');

/**
 * Defines PUT method to update particular todo item
 */
Route::put('todos/{todo}', 'TodoController@update');

/**
 * Defines DELETE method to remove particular todo item
 */
Route::delete('todos/{todo}', 'TodoController@delete');