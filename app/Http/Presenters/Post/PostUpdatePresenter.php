<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use Packages\UseCase\Post\Update\PostUpdatePresenterInterface;
use Packages\UseCase\Post\Update\PostUpdateResponse;

class PostUpdatePresenter implements PostUpdatePresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(PostUpdateResponse $outputData)
    {
    }
}
