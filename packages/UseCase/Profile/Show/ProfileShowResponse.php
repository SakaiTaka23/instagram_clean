<?php

namespace Packages\UseCase\Profile\Show;

use Illuminate\Support\Collection;
use Packages\Domain\Domain\Profile\Profile;

class ProfileShowResponse
{
    public function __construct(Profile $profile, Collection $posts)
    {
        $this->profile = $profile;
        $this->posts = $posts;
    }

    public function getProfile()
    {
        return $this->profile;
    }

    public function getPosts()
    {
        return $this->posts;
    }
}
