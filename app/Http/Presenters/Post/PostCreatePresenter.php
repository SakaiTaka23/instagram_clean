<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use Packages\UseCase\Post\Create\PostCreatePresenterInterface;
use Packages\UseCase\Post\Create\PostCreateResponse;

class PostCreatePresenter implements PostCreatePresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(PostCreateResponse $outputData)
    {
    }
}
