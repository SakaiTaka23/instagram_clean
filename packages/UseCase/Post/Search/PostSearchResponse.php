<?php

namespace Packages\UseCase\Post\Search;

use Illuminate\Support\Collection;

class PostSearchResponse
{
    public function __construct(string $keyword, Collection $posts)
    {
        $this->keyword = $keyword;
        $this->posts = $posts;
    }

    public function getKeyWord()
    {
        return $this->keyword;
    }

    public function getPosts()
    {
        return $this->posts;
    }
}
