<?php namespace Blog\Utils;

class Tags {

    /**
     * Extract all tags from the text.
     *
     * @param string $text
     * @return array
     */
    public function extract($text)
    {
        $tags = [];

        \preg_match_all('/#(\w+)/', $text, $tags);

        return \array_values(\array_unique($tags[1]));
    }

}

