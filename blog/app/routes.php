<?php

Route::get('/', function()
{
	return (new Blog\Repositories\PostRepository)->all();
});
