<?php

namespace Packages\UseCase\Profile\Index;

use Illuminate\Support\Collection;

class ProfileIndexResponse
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
