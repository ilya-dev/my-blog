<?php namespace Blog\Repositories;

use Blog\Post;

class PostRepository {

    /**
     * Fetch all posts.
     *
     * @return \Illuminate\Support\Collection
     */
    public function all()
    {
        return Post::all();
    }

}

