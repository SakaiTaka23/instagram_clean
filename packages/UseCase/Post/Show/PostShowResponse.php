<?php

namespace Packages\UseCase\Post\Show;

use Packages\Domain\Domain\Post\Post;

class PostShowResponse
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
