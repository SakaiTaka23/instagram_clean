<?php

namespace App\Http\Models\Post\Show;

class PostShowViewModel
{
    public function __construct($post)
    {
        $this->post = $post;
    }
}