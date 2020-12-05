<?php

namespace App\Http\Models\Profile\Index;

class ProfileIndexViewModel
{
    public function __construct($profile)
    {
        $this->prifile = $profile;
    }
}