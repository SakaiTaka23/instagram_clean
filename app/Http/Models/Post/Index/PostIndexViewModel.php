<?php

namespace App\Http\Models\Post\Index;

class PostIndexViewModel
{
    public function __construct($posts)
    {
        $this->posts = $posts;
    }
}