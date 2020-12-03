<?php

namespace Packages\Domain\Domain\Profile;

class Profile
{

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/JNiNHZYPax0bk1mZWBDuZbvKfghk7OsZRJjsTrXO.png';

        return '/storage/' . $imagePath;
    }

    // public function followers()
    // {
    //     return $this->belongsToMany('packages\Domain\Domain\User');
    // }

    // public function user()
    // {
    //     return $this->belongsTo('packages\Domain\Domain\User');
    // }

    public function __construct(int $id, int $user_id, string $username, string $description, string $url, string $profile_photo_path)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->username = $username;
        $this->description = $description;
        $this->url = $url;
        $this->profile_photo_path = $profile_photo_path;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getProfilePhotoPath()
    {
        return $this->profile_photo_path;
    }
}
