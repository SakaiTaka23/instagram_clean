<?php

namespace App\Http\Models\Profile\Index;


class ProfileIndexViewModel
{
    public function __construct(array $posts)
    {
        $this->posts = $posts;
    }
}