<?php

namespace App\Http\Models\Profile\Show;

use App\Http\Models\Profile\Commons\ProfileViewModel;

class ProfileShowViewModel
{
    public function __construct(ProfileViewModel $profile, int $post_count, array $posts)
    {
        $this->profile = $profile;
        $this->post_count = $post_count;
        $this->posts = $posts;
    }
}
