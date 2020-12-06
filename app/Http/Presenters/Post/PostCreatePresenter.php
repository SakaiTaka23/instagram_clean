<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use App\Http\Models\Post\Create\PostCreateViewModel;
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
        $viewModel = new PostCreateViewModel($outputData);
        $this->middleware->setData(view('posts.create', compact('viewModel')));
    }
}
