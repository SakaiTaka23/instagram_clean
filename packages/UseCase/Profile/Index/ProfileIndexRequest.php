<?php

namespace Packages\Usecase\Profile\Index;

class ProfileIndexRequest
{
    public function __construct(Int $ProfileId)
    {
        $this->ProfileId = $ProfileId;
    }

    public function getProfileId(): Int
    {
        return $this->ProfileId;
    }
}
