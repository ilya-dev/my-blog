<?php namespace Blog;

class Tag extends \Eloquent {

    /**
     * Whether to use the "created_at" and "updated_at" fields.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The fillable fields.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Fetch all related posts.
     *
     * @return \Illuminate\Support\Collection
     */
    public function posts()
    {
        return $this->belongsToMany('Blog\Post');
    }

}

