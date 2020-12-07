<?php

namespace packages\UseCase\Post\Edit;

class PostEditRequest
{
    public function __construct(int $PostId)
    {
        $this->PostId = $PostId;
    }

    public function getPostId(): int
    {
        return $this->PostId;
    }
}
