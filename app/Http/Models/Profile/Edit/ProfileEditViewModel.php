<?php

namespace App\Http\Models\Profile\Edit;

use App\Http\Models\Profile\Commons\ProfileViewModel;

class ProfileEditViewModel
{
    public function __construct(ProfileViewModel $profile)
    {
        $this->profile = $profile;
    }
}
