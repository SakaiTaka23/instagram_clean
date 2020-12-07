<?php

namespace App\Http\Models\Post\Edit;

use App\Http\Models\Post\Commons\PostViewModel;

class PostEditViewModel
{
    public function __construct(PostViewModel $post)
    {
        $this->post = $post;
    }
}
