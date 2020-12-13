<?php

namespace Packages\UseCase\Profile\Show;

use Illuminate\Support\Collection;
use Packages\Domain\Domain\Profile\Profile;

class ProfileShowResponse
{
    public function __construct(Profile $profile, int $post_count,Collection $posts)
    {
        $this->profile = $profile;
        $this->post_count = $post_count;
        $this->posts = $posts;
    }

    public function getProfile()
    {
        return $this->profile;
    }

    public function getPostCount()
    {
        return $this->post_count;
    }

    public function getPosts()
    {
        return $this->posts;
    }
}
