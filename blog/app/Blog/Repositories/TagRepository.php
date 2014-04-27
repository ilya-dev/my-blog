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
        return Tag::all();
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
        return Tag::findOrFail($id);
    }

}

