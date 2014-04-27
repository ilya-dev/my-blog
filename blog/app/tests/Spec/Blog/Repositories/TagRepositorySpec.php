<?php namespace Spec\Blog\Repositories;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TagRepositorySpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Blog\Repositories\TagRepository');
    }

    function it_fetches_all_tags()
    {
        $this->all()->shouldHaveType('Illuminate\Support\Collection');
    }

}

namespace Blog;

class Tag {

    public static function all()
    {
        return new \Illuminate\Support\Collection;
    }

}

