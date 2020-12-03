<?php

namespace Packages\Usecase\Profile\Index;

class ProfileIndexResponse
{
    public function __construct(array $profile)
    {
        $this->profile = $profile;
    }
}
