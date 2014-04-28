<?php namespace Blog;

class Post extends \Eloquent {

    /**
     * The fillable fields.
     *
     * @var array
     */
    protected $fillable = ['title', 'content'];

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

