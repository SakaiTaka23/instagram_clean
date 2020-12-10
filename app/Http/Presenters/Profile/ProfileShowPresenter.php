<?php

namespace App\Http\Presenters\Profile;

use App\Http\Middleware\CleanArchitectureMiddleware;
use App\Http\Models\Post\Commons\PostViewModelSimple;
use App\Http\Models\Profile\Commons\ProfileViewModel;
use App\Http\Models\Profile\Show\ProfileShowViewModel;
use Packages\UseCase\Profile\Show\ProfileShowPresenterInterface;
use Packages\UseCase\Profile\Show\ProfileShowResponse;

class ProfileShowPresenter implements ProfileShowPresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(ProfileShowResponse $outputData)
    {
        $profile = $outputData->getProfile();
        $profile = new ProfileViewModel($profile->id, $profile->user_id, $profile->username, $profile->description, $profile->url, $profile->profile_photo_path);
        $posts = $outputData->getPosts();
        $post_array = [];
        foreach($posts as $post)
        {
            $post = new PostViewModelSimple($post->id, $post->post_photo_path);
            array_push($post_array,$post);
        }
        $viewModel = new ProfileShowViewModel($profile,$post_array);

        $this->middleware->setData(view('test', compact('viewModel')));
    }
}
