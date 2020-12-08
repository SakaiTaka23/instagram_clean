<?php

namespace Packages\UseCase\Post\Update;

class PostUpdateResponse
{
    public function __construct(int $UpdatedPostId)
    {
        $this->UpdatedPostId = $UpdatedPostId;
    }

    public function getUpdatedPostId()
    {
        return $this->UpdatedPostId;
    }
}
