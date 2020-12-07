<?php

namespace App\Http\Models\Post\Show;

use App\Http\Models\Post\Commons\PostViewModel;

class PostShowViewModel
{
    public function __construct(PostViewModel $post)
    {
        $this->post = $post;
    }
}