<?php

namespace App\Http\Presenters\Profile;

use App\Http\Middleware\CleanArchitectureMiddleware;
use Packages\UseCase\Profile\Update\ProfileUpdatePresenterInterface;
use Packages\UseCase\Profile\Update\ProfileUpdateResponse;

class ProfileUpdatePresenter implements ProfileUpdatePresenterInterface
{
    public function __construct(CleanArchitectureMiddleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function output(ProfileUpdateResponse $outputData)
    {
        $this->middleware->setData(redirect(route('profiles.show', ['profile' => $outputData->getUpdatedUserId()])));
    }
}
