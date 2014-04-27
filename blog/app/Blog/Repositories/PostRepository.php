<?php namespace Blog\Repositories;

use Blog\Post;

class PostRepository {

    /**
     * Fetch all posts.
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function all()
    {
        // show N entries on a single page
        return Post::paginate(5);
    }

    /**
     * Fetch a post.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @param mixed $id
     * @return \Blog\Post
     */
    public function get($id)
    {
        return Post::findOrFail($id);
    }

}

