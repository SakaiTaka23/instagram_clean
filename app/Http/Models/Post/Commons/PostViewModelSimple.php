<?php

namespace App\Http\Models\Post\Commons;

class PostViewModelSimple
{
    public function __construct(string $id, string $post_photo_path)
    {
        $this->id = $id;
        $this->post_photo_path = $post_photo_path;
    }
}
