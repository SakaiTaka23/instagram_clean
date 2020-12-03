<?php

namespace packages\Domain\Domain\Post;


class Post
{
    // public function user()
    // {
    //     return $this->belongsTo('packages\Domain\Domain\User');
    // }

    public function __construct(int $id, int $user_id, string $caption, string $post_photo_path)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->caption = $caption;
        $this->post_photo_path = $post_photo_path;
    }

    public function getId(): Int
    {
        return $this->id;
    }

    public function getUserId(): Int
    {
        return $this->user_id;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getPostPhotoPath(): string
    {
        return $this->post_photo_path;
    }
}
