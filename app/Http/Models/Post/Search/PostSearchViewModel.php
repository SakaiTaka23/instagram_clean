<?php

namespace App\Http\Models\Post\Search;

class PostSearchViewModel
{
    public function __construct(string $keyword,array $posts)
    {
        $this->keyword = $keyword;
        $this->posts = $posts;
    }
}
