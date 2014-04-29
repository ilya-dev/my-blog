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

    /**
     * Add a new post.
     *
     * @param array $data
     * @return integer
     */
    public function add(array $data)
    {
        return Post::create($data)->getKey();
    }

    /**
     * Update the post.
     *
     * @param mixed $id
     * @param array $data
     * @return void
     */
    public function update($id, array $data)
    {
        $this->get($id)->save($data);
    }

}

