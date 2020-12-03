<?php

namespace packages\Usecase\Post\Store;

class PostStoreRequest
{
    public function __construct(Int $user_id, String $caption, $photo)
    {
        $this->user_id = $user_id;
        $this->caption = $caption;
        $this->photo = $photo;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getCaption()
    {
        return $this->caption;
    }

    public function getPhoto()
    {
        return $this->photo;
    }
}
