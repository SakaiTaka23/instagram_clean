<?php

namespace App\Http\Models\Post\Search;

class PostSearchViewModel
{
    public function __construct(array $posts)
    {
        $this->posts = $posts;
    }
}
