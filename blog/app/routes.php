<?php

Route::get('/', function()
{
    $posts = (new Blog\Repositories\PostRepository)->all();

    return View::make('posts.index')->withPosts($posts);
});

Route::get('tags', function()
{
    $tags = (new Blog\Repositories\TagRepository)->all();

    return View::make('tags.index')->withTags($tags);
});

Route::get('posts/{id}', function($id)
{
    $post = (new Blog\Repositories\PostRepository)->get($id);

    return View::make('posts.show')->withPost($post);
});

