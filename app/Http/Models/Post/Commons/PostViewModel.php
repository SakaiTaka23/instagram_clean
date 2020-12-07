<?php

namespace App\Http\Models\Post\Commons;

class PostViewModel
{
    public function __construct(string $id, string $post_photo_path)
    {
        $this->id = $id;
        $this->post_photo_path = $post_photo_path;
    }
}
