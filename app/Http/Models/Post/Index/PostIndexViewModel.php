<?php

namespace App\Http\Models\Post\Index;

class PostIndexViewModel
{
    public function __construct(array $posts)
    {
        $this->posts = $posts;
    }
}