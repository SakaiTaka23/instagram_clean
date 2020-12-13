<?php

namespace Packages\UseCase\Post\Search;

use Illuminate\Support\Collection;

class PostSearchResponse
{
    public function __construct(Collection $posts)
    {
        $this->posts = $posts;
    }

    public function getPosts()
    {
        return $this->posts;
    }
}
