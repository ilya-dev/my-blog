<?php namespace Spec\Blog;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HelloWorldSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Blog\HelloWorld');
    }

}

