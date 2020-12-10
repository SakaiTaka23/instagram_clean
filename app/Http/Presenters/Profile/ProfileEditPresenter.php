<?php

namespace App\Http\Presenters\Profile;

use App\Http\Middleware\CleanArchitectureMiddleware;
use App\Http\Models\Profile\Commons\ProfileViewModel;
use App\Http\Models\Profile\Edit\ProfileEditViewModel;
use Packages\UseCase\Profile\Edit\ProfileEditPresenterInterface;
use Packages\UseCase\Profile\Edit\ProfileEditResponse;

class ProfileEditPresenter implements ProfileEditPresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(ProfileEditResponse $outputData)
    {
        $profile = $outputData->getProfile();
        $profile = new ProfileViewModel($profile->id, $profile->user_id, $profile->username, $profile->description, $profile->url, $profile->profile_photo_path);
        $viewModel = new ProfileEditViewModel($profile);
        $this->middleware->setData(view('profiles.edit', compact('viewModel')));
    }
}
