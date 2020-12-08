<?php

namespace Packages\Domain\Application\Profile;

use Packages\UseCase\Profile\Show\ProfileShowRequest;
use Packages\UseCase\Profile\Show\ProfileShowUseCaseInterface;

class ProfileShowInteractor implements ProfileShowUseCaseInterface
{
    public function __construct()
    {
    }

    public function handle(ProfileShowRequest $request)
    {
    }
}
