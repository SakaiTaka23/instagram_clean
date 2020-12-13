<?php

namespace Packages\UseCase\Post\Show;

use Packages\Domain\Domain\Post\Post;

class PostShowResponse
{
    public function __construct(?int $UserId, ?string $profile_photo_path, ?string $username, ?Post $post)
    {
        $this->UserId = $UserId;
        $this->profile_photo_path = $profile_photo_path;
        $this->username = $username;
        $this->post = $post;
    }

    public function getUserId()
    {
        return $this->UserId;
    }

    public function getProfilePhotoPath()
    {
        return $this->profile_photo_path;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPost()
    {
        return $this->post;
    }
}
