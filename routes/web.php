<?php

use App\Task;

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'can:show,App\Task'], function () {
        Route::get('/tasks', function () {
            return view('tasks');
        });
    });

    Route::get('tasks1', function()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    });

    Route::get('/profile/tokens', function () {
        return view('tokens');
    });

    Route::get('users', function () {
        dd(App\User::paginate());
    });

    #adminlte_routes
    Route::get('floatlayout', 'FloatlayoutController@index')->name('floatlayout');

    Route::get('boxmodel', 'BoxmodelController@index')->name('boxmodel');

    Route::get('/float', function () {
        return view('float');
    });


});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phpinfo', function () {
    phpinfo();
});
