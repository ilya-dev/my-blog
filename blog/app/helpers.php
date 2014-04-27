<?php

function open_li_tag($uri, $class = 'active')
{
    return Request::path() == $uri ? "<li class=\"{$class}\">" : '<li>';
}

