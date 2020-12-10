<?php

namespace App\Http\Presenters\Profile;

use App\Http\Middleware\CleanArchitectureMiddleware;
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
    }
}
