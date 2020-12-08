<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use Packages\UseCase\Post\Delete\PostDeletePresenterInterface;
use Packages\UseCase\Post\Delete\PostDeleteResponse;

class PostDeletePresenter implements PostDeletePresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(PostDeleteResponse $outputData)
    {
        $this->middleware->setData(redirect(route('post.index')));
    }
}
