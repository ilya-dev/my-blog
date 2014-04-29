<?php namespace Blog\Repositories;

use Blog\Post;
use Blog\Utils\Tags;

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
        $post = Post::create($data);

        $this->attachTags($post);

        return $post->getKey();
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
        $post = $this->get($id);

        $this->attachTags($post);

        $post->save($data);
    }

    /**
     * Update the list of tags attached to the post.
     *
     * @param Post $post
     * @return void
     */
    protected function attachTags(Post $post)
    {
        dd('I am here!');

        $utils = new Tags;

        $tags = new TagRepository;

        foreach ($utils->extract($post->content) as $tag)
        {
            dd($tag);

            $post->tags()->attach($repository->add([
                'name' => $tag,
            ]));
        }
    }

}

