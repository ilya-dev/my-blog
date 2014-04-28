<?php

Route::group(['before' => 'auth.basic'], function()
{
    Route::resource('posts', 'PostsController', [
        'except' => ['show'],
    ]);

    Route::resource('tags', 'TagsController', [
        'except' => ['index', 'show'],
    ]);
});

Route::resource('posts', 'PostsController', [
    'only' => ['show'],
]);

Route::get('/', 'PostsController@index');

Route::resource('tags', 'TagsController', [
    'only' => ['index', 'show'],
]);

