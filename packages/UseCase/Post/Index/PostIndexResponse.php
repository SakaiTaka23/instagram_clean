<?php

namespace Packages\UseCase\Post\Index;

use Illuminate\Support\Collection;

class PostIndexResponse
{
    public function __construct(Collection $posts)
    {
        $this->posts = $posts;
    }
}
