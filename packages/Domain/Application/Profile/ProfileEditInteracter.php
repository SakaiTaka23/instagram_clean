<?php

namespace Packages\Domain\Application\Profile;

use Packages\UseCase\Profile\Edit\ProfileEditRequest;
use Packages\UseCase\Profile\Edit\ProfileEditUseCaseInterface;

class ProfileEditInteracter implements ProfileEditUseCaseInterface
{
    public function __construct()
    {
    }

    public function handle(ProfileEditRequest $request)
    {
    }
}
