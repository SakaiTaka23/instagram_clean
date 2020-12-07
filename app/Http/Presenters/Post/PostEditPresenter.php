<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use packages\UseCase\Post\Edit\PostEditPresenterInterface;
use packages\UseCase\Post\Edit\PostEditResponse;

class PostEditPresenter implements PostEditPresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(PostEditResponse $outputData)
    {
    }
}
