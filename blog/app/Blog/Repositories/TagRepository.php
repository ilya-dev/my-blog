<?php namespace Blog\Repositories;

use Blog\Tag;
use Illuminate\Database\QueryException;

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
     * @return Tag
     */
    public function get($id)
    {
        return Tag::with('posts')->findOrFail($id);
    }

    /**
     * Add a tag.
     *
     * @param array $data
     * @return integer
     */
    public function add(array $data)
    {
        try
        {
            return Tag::create($data)->getKey();
        }
        catch (QueryException $exception)
        {
            return Tag::whereName($data['name'])->firstOrFail();
        }
    }

}

