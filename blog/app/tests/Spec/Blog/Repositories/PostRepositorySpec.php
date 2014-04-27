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
        $this->all()->shouldHaveType('Illuminate\Pagination\Paginator');
    }

}

namespace Blog;

class Post {

    public static function paginate()
    {
        return (new \Prophecy\Prophet)
            ->prophesize('Illuminate\Pagination\Paginator')
            ->reveal();
    }

}

