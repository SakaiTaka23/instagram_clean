<?php

namespace App\Http\Models\Profile\Show;

use App\Http\Models\Profile\Commons\ProfileViewModel;

class ProfileShowViewModel
{
    public function __construct(ProfileViewModel $profile,array $post)
    {
        $this->profile = $profile;
        $this->post = $post;
    }
}
