<?php

namespace Packages\UseCase\Profile\Update;

class ProfileUpdateRequest
{
    public function __construct(int $UserId, $photo, string $username, string $description,string $url)
    {
        $this->UserId = $UserId;
        $this->photo = $photo;
        $this->username = $username;
        $this->description = $description;
        $this->url = $url;
    }

    public function getUserId()
    {
        return $this->UserId;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getUsername()
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
}
