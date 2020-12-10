<?php

namespace App\Http\Models\Profile\Commons;

class ProfileViewModel
{
    public function __construct(int $id, int $user_id, string $username, string $description, string $url, string $profile_photo_path)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->username = $username;
        $this->description = $description;
        $this->url = $url;
        $this->profile_photo_path = $profile_photo_path;
    }
}
