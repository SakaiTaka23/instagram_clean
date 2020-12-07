<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use App\Http\Models\Post\Commons\PostViewModel;
use App\Http\Models\Post\Edit\PostEditViewModel;
use Packages\UseCase\Post\Edit\PostEditPresenterInterface;
use Packages\UseCase\Post\Edit\PostEditResponse;

class PostEditPresenter implements PostEditPresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(PostEditResponse $outputData)
    {
        $post = $outputData->getPost();
        $post = new PostViewModel($post->id, $post->user_id, $post->caption, $post->post_photo_path, $post->created_at, $post->updated_at);
        $viewModel = new PostEditViewModel($post);
        $this->middleware->setData(view('posts.edit', compact('viewModel')));
    }
}
