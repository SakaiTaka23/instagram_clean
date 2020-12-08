<?php

namespace Packages\Domain\Application\Profile;

use Packages\UseCase\Profile\Update\ProfileUpdateRequest;
use Packages\UseCase\Profile\Update\ProfileUpdateUseCaseInterface;

class ProfileUpdateInteractor implements ProfileUpdateUseCaseInterface
{
    public function __construct()
    {
    }

    public function handle(ProfileUpdateRequest $request)
    {
    }
}
