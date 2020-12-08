<?php

namespace App\Http\Presenters\Profile;

use App\Http\Middleware\CleanArchitectureMiddleware;
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
    }
}
