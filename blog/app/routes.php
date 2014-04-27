<?php

Route::resource('posts', 'PostsController', [
    'only' => ['show'],
]);

Route::get('/', 'PostsController@index');

Route::resource('tags', 'TagsController', [
    'only' => ['index'],
]);

