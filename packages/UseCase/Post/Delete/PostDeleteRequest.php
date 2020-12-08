<?php

namespace Packages\UseCase\Post\Delete;

class PostDeleteRequest
{
    public function __construct(int $PostId)
    {
        $this->PostId = $PostId;
    }

    public function getPostId()
    {
        return $this->PostId;
    }
}
