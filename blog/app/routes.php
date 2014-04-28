<?php

Route::group(['before' => 'auth'], function()
{
    Route::resource('posts', 'PostsController', [
        'except' => ['show'],
    ]);

    Route::resource('tags', 'TagsController', [
        'except' => ['index', 'show'],
    ]);
});

Route::group(['before' => 'guest'], function()
{
    Route::get('login', 'UsersController@login');
});

Route::resource('posts', 'PostsController', [
    'only' => ['show'],
]);

Route::get('/', 'PostsController@index');

Route::resource('tags', 'TagsController', [
    'only' => ['index', 'show'],
]);

