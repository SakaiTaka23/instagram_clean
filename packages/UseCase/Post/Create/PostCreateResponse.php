<?php

namespace Packages\UseCase\Post\Create;

class PostCreateResponse
{
    public function __construct($request)
    {
        $this->request = $request;
    }
}
