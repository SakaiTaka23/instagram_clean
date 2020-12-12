<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use App\Http\Models\Post\Commons\PostViewModelSimple;
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
        $posts = $outputData->getPosts();
        $post_array = [];
        foreach ($posts as $post) {
            $post = new PostViewModelSimple($post->id, $post->post_photo_path);
            array_push($post_array, $post);
        }
        $viewModel = new PostIndexViewModel($post_array);
        // dd($viewModel);
        $this->middleware->setData(view('posts.index', compact('viewModel')));
    }
}
