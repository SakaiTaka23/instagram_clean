<?php

namespace packages\UseCase\Post\Edit;

use packages\UseCase\Post\Commons\PostModel;

class PostEditResponse
{
    public function __construct(PostModel $post)
    {
        $this->post = $post;
    }
}
