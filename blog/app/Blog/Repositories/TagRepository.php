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

}

