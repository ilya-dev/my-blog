<?php namespace Blog;

class Post extends \Eloquent {

    /**
     * Fetch all related tags.
     *
     * @return \Illuminate\Support\Collection
     */
    public function tags()
    {
        return $this->belongsToMany('Blog\Tag');
    }

}

