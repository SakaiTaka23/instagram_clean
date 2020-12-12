<?php

namespace App\Http\Models\Profile\Commons;

class ProfileViewModelSimple
{
    public function __construct(int $UserId,string $profile_photo_path,string $username)
    {
        $this->UserId = $UserId;
        $this->profile_photo_path = $profile_photo_path;
        $this->username = $username;
    }
}