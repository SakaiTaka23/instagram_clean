<?php

namespace Packages\Usecase\Post\Index;

class PostIndexRequest
{
    public function __construct(Int $UserId)
    {
        $this->UserId = $UserId;
    }

    public function getUserId(): Int
    {
        return $this->UserId;
    }
}
