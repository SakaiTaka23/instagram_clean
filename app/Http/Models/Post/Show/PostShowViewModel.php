<?php

namespace App\Http\Models\Post\Show;

use App\Http\Models\Post\Commons\PostViewModel;
use App\Http\Models\Profile\Commons\ProfileViewModelSimple;

class PostShowViewModel
{
    public function __construct(ProfileViewModelSimple $profile,PostViewModel $post)
    {
        $this->profile = $profile;
        $this->post = $post;
    }
}
