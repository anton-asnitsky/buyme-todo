<?php

/**
 * Defines GET metohod for todos list
 */
Route::get('todo', 'TodoController@index');

/**
 * Defines GET method to get particular totdo
 */
Route::get('todo/{todo}', 'TodoController@show');

/**
 * Defines POST to create new todo item
 */
Route::post('todo', 'TodoController@store');

/**
 * Defines PUT method to update particular todo item
 */
Route::put('todo/{todo}', 'TodoController@update');

/**
 * Defines DELETE method to remove particular todo item
 */
Route::delete('todo/{todo}', 'TodoController@delete');