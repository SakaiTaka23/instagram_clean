<?php

namespace App\Http\Models\Post\Commons;

class PostViewModel
{
    public function __construct(string $id,int $user_id,string $caption,string $post_photo_path,string $created_at,string $updated_at)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->caption = $caption;
        $this->post_photo_path = $post_photo_path;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
