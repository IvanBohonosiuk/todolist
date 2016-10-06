<?php
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'api/', 'middleware' => 'auth:api'], function() {
    Route::get('list', 'Api\TasksController@index');
    Route::delete('task/{id}', 'Api\TasksController@delete');
    Route::get('task/{id}', 'Api\TasksController@updateForm');
    Route::put('task/{id}', [
    	'uses' => 'Api\TasksController@update',
    	'as' => 'task.update'
    ]);
    Route::post('task', 'Api\TasksController@create');
});