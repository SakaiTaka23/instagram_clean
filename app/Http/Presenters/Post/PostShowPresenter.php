<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use App\Http\Models\Post\Commons\PostViewModel;
use App\Http\Models\Post\Show\PostShowViewModel;
use App\Http\Models\Profile\Commons\ProfileViewModelSimple;
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
        $post = $outputData->getPost();

        if (is_null($post)) {
            $this->middleware->setData(abort(404));
        }

        $profile = new ProfileViewModelSimple($outputData->UserId, $outputData->profile_photo_path, $outputData->username);
        $post = new PostViewModel($post->id, $post->user_id, $post->caption, $post->post_photo_path, $post->created_at, $post->updated_at);
        $viewModel = new PostShowViewModel($profile, $post);
        $this->middleware->setData(view('posts.show', compact('viewModel')));
    }
}
