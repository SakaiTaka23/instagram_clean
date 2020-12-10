<?php

namespace App\Http\Presenters\Profile;

use App\Http\Middleware\CleanArchitectureMiddleware;
use App\Http\Models\Post\Commons\PostViewModelSimple;
use App\Http\Models\Post\Index\PostIndexViewModel;
use Packages\UseCase\Profile\Index\ProfileIndexPresenterInterface;
use Packages\UseCase\Profile\Index\ProfileIndexResponse;

class ProfileIndexPresenter implements ProfileIndexPresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(ProfileIndexResponse $outputData)
    {
        dd($outputData);
        $posts = $outputData->getPosts();
        $post_array = [];
        foreach ($posts as $post) {
            $post = new PostViewModelSimple($post->id, $post->post_photo_path);
            array_push($post_array, $post);
        }
        $viewModel = new PostIndexViewModel($post_array);
        dd($viewModel);
        $this->middleware->setData(view('test', compact('viewModel')));
    }
}
