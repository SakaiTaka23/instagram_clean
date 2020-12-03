<?php

namespace packages\Usecase\Profile\Index;

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
