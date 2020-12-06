<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use App\Http\Models\Post\Show\PostShowViewModel;
use Packages\UseCase\Post\Show\PostShowPresenterInterface;
use Packages\UseCase\Post\Show\PostShowResponse;

class PostShowPresenter implements PostShowPresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(PostShowResponse $outputData)
    {
        $viewModel = new PostShowViewModel($outputData);
        $this->middleware->setData(view('test', compact('viewModel')));
    }
}
