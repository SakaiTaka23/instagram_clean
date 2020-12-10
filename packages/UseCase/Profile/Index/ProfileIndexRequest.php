<?php

namespace Packages\UseCase\Profile\Index;

class ProfileIndexRequest
{
    public function __construct(int $UserId)
    {
        $this->UserId = $UserId;
    }

    public function getUserId():int
    {
        return $this->UserId;
    }
}
