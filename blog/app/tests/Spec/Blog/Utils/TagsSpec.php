<?php namespace Spec\Blog\Utils;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TagsSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Blog\Utils\Tags');
    }

    function it_extracts_all_tags_from_the_text()
    {
        $text = 'I love #programming.'
                .' Of course #git helps me in #programming.'
                .' My #workflow is perfect.';

        $this->extract($text)->shouldReturn([
            'programming', 'git', 'workflow'
        ]);
    }

}

