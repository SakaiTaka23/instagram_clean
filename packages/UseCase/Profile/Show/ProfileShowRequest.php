<?php

namespace Packages\UseCase\Profile\Show;

class ProfileShowRequest
{
    public function __construct(int $UserId)
    {
        $this->UserId = $UserId;
    }

    public function getUserId(): int
    {
        return $this->UserId;
    }
}
