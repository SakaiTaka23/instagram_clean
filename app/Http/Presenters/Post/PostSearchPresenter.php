<?php

namespace App\Http\Presenters\Post;

use App\Http\Middleware\CleanArchitectureMiddleware;
use App\Http\Models\Post\Commons\PostViewModelSimple;
use App\Http\Models\Post\Search\PostSearchViewModel;
use Packages\UseCase\Post\Search\PostSearchPresenterInterface;
use Packages\UseCase\Post\Search\PostSearchResponse;

class PostSearchPresenter implements PostSearchPresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(PostSearchResponse $outputData)
    {
        $posts = $outputData->getPosts();
        $post_array = [];
        foreach ($posts as $post) {
            $post = new PostViewModelSimple($post->id, $post->post_photo_path);
            array_push($post_array, $post);
        }
        $viewModel = new PostSearchViewModel($outputData->getKeyWord(),$post_array);
        $this->middleware->setData(view('posts.search', compact('viewModel')));
    }
}
