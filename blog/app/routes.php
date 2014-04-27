<?php

Route::get('/', function()
{
    $posts = (new Blog\Repositories\PostRepository)->all();

    return View::make('posts.index')->withPosts($posts);
});
