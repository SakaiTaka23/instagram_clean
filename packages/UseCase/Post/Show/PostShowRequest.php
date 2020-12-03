<?php

namespace packages\Usecase\Post\Show;

class PostShowRequest
{
    public function __construct(Int $PostId)
    {
        $this->PostId = $PostId;
    }

    public function getPostId(): Int
    {
        return $this->PostId;
    }
}
