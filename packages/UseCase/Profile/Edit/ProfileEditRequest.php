<?php

namespace Packages\UseCase\Profile\Edit;

class ProfileEditRequest
{
    public function __construct(int $UserId)
    {
        $this->UserId = $UserId;
    }

    public function getUserId()
    {
        return $this->UserId;
    }
}
