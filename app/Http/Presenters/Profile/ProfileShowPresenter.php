<?php

namespace App\Http\Presenters\Profile;

use App\Http\Middleware\CleanArchitectureMiddleware;
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
    }
}
