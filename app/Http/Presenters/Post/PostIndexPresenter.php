<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use App\Http\Models\Post\Index\PostIndexViewModel;
use Packages\UseCase\Post\Index\PostIndexPresenterInterface;
use Packages\UseCase\Post\Index\PostIndexResponse;

class PostIndexPresenter implements PostIndexPresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(PostIndexResponse $outputData)
    {
        $viewModel = new PostIndexViewModel($outputData);
        dd($viewModel);
        $this->middleware->setData(view('post.index', compact('viewModel')));
    }
}
