<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use Packages\UseCase\Post\Store\PostStorePresenterInterface;
use Packages\UseCase\Post\Store\PostStoreResponse;

class PostStorePresenter implements PostStorePresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(PostStoreResponse $outputData)
    {
        $this->middleware->setData(redirect(route('post.show', ['post' => $outputData->getstoredImageId()])));
    }
}
