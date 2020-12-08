<?php

namespace Packages\UseCase\Post\Update;

class PostUpdateRequest
{
    public function __construct(string $caption, int $PostId)
    {
        $this->caption = $caption;
        $this->PostId = $PostId;
        $this->updated_at = now();
    }

    public function getCaption()
    {
        return $this->caption;
    }

    public function getPostId()
    {
        return $this->PostId;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
