<?php

Route::group(['before' => 'auth'], function()
{
    Route::resource('posts', 'PostsController', [
        'except' => ['show'],
    ]);

    Route::resource('tags', 'TagsController', [
        'except' => ['index', 'show'],
    ]);

    Route::get('logout', 'UsersController@logout');

    Route::get('dashboard', 'HomeController@index');
});

Route::group(['before' => 'guest'], function()
{
    Route::get('login', 'UsersController@login');

    Route::post('create_session', 'UsersController@createSession', [
        'before' => 'csrf',
    ]);
});

Route::resource('posts', 'PostsController', [
    'only' => ['show'],
]);

Route::get('/', 'PostsController@index');

Route::resource('tags', 'TagsController', [
    'only' => ['index', 'show'],
]);

