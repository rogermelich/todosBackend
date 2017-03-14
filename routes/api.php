<?php

//Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
Route::group(['prefix' => 'v1', 'middleware' => ['cors', 'auth:sapi']], function () {
    Route::resource('task', 'TasksController');
    Route::resource('user', 'UsersController');
    Route::resource('user.task', 'UserTasksController');
    //Add Route Get for /user
    Route::get('/user', function () {
        return Auth::user();
    });
});

//Example Laravel API user request
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});