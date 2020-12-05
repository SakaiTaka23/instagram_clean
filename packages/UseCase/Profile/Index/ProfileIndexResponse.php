<?php

namespace Packages\UseCase\Profile\Index;

class ProfileIndexResponse
{
    public function __construct(array $profile)
    {
        $this->profile = $profile;
    }
}
