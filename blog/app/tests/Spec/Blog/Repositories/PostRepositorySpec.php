<?php namespace Spec\Blog\Repositories;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PostRepositorySpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Blog\Repositories\PostRepository');
    }

    function it_fetches_all_posts()
    {
        $this->all()->shouldHaveType('Illuminate\Support\Collection');
    }

}

namespace Blog;

class Post {

    public static function all()
    {
        return new \Illuminate\Support\Collection;
    }

}

