<?php

namespace Packages\UseCase\Profile\Update;

class ProfileUpdateResponse
{
    public function __construct(int $UpdatedUserId)
    {
        $this->UpdatedUserId = $UpdatedUserId;
    }

    public function getUpdatedUserId()
    {
        return $this->UpdatedUserId;
    }
}
