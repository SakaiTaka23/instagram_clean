<?php

namespace Packages\UseCase\Post\Store;

class PostStoreResponse
{
    public function __construct(Int $storedImageId)
    {
        $this->storedImageId = $storedImageId;
    }

    public function getstoredImageId()
    {
        return $this->storedImageId;
    }
}
