<?php

Route::resource('posts', 'PostsController', [
    'only' => ['show'],
]);

Route::get('/', 'PostsController@index');

Route::get('tags', function()
{
    $tags = (new Blog\Repositories\TagRepository)->all();

    return View::make('tags.index')->withTags($tags);
});

