<?php

namespace Packages\UseCase\Profile\Edit;

use Packages\Domain\Domain\Profile\Profile;

class ProfileEditResponse
{
    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function getProfile()
    {
        return $this->profile;
    }
}
