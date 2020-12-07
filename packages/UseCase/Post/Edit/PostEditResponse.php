<?php

namespace Packages\UseCase\Post\Edit;

use Packages\Domain\Domain\Post\Post;

class PostEditResponse
{
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getPost()
    {
        return $this->post;
    }
}
