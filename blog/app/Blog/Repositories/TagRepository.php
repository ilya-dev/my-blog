<?php namespace Blog\Repositories;

use Blog\Tag;

class TagRepository {

    /**
     * Fetch all tags.
     *
     * @return \Illuminate\Support\Collection
     */
    public function all()
    {
        $tags = Tag::with('posts')->get();

        return $tags->sortBy(function(Tag $tag)
        {
            return -1 * $tag->posts->count();
        });
    }

    /**
     * Fetch a tag.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @param mixed $id
     * @return \Blog\Tag
     */
    public function get($id)
    {
        return Tag::with('posts')->findOrFail($id);
    }

}

