<?php

namespace packages\UseCase\Post\Commons;

class PostModel
{
    public function __construct(int $id, int $user_id, string $caption, string $post_photo_path, string $created_at, string $updated_at)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->caption = $caption;
        $this->post_photo_path = $post_photo_path;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
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

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }
}
