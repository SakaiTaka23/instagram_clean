<?php

namespace Packages\UseCase\Post\Index;

class PostIndexResponse
{
    public function __construct(array $posts)
    {
        $this->posts = $posts;
    }
}
