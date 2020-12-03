<?php

namespace packages\Usecase\Post\Show;

class PostShowResponse
{
    public function __construct(array $post)
    {
        $this->post = $post;
    }
}