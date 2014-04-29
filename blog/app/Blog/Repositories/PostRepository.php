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

        $this->attachTags($post, $data);

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

        $this->attachTags($post, $data);

        $post->title   = $data['title'];
        $post->content = $data['content'];

        $post->save();
    }

    /**
     * Update the list of tags attached to the post.
     *
     * @param Post $post
     * @param array $data
     * @return void
     */
    protected function attachTags(Post $post, array $data)
    {
        $util = new Tags;
        $tags = new TagRepository;

        $saved = $post->tags;

        $new = $util->extract($data['content']);

        foreach ($new as $tag)
        {
            if (\in_array($tag, $saved->lists('name')))
            {
                continue;
            }

            $post->tags()->attach($tags->add([
                'name' => $tag,
            ]));
        }

        // now detach tags
        // I now that it should not be performed in attachTags
        // but anyway

        foreach ($saved as $tag)
        {
            if (false === \strpos($data['content'], '#'.$tag->name))
            {
                $post->tags()->detach($tag->id);
            }
        }
    }

}

