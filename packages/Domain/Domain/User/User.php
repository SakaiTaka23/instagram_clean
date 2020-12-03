<?php

namespace Packages\Domain\Domain\User;

class User
{
    // public function posts()
    // {
    //     return $this->hasMany('packages\Domain\Domain\Post');
    // }

    // public function following()
    // {
    //     return $this->belongsToMany('packages\Domain\Domain\Profile');
    // }

    // public function profile()
    // {
    //     return $this->hasOne('packages\Domain\Domain\Profile');
    // }

    public function __construct(int $id, string $name,string $email,string $username,string $profile_photo_path)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->username = $username;
        $this->profile_photo_path = $profile_photo_path;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getProfilePhotoPath(): string
    {
        return $this->profile_photo_path;
    }
}
