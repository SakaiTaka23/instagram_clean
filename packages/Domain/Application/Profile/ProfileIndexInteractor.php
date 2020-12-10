<?php

namespace Packages\Domain\Application\Profile;

use Packages\UseCase\Profile\Index\ProfileIndexRequest;
use Packages\UseCase\Profile\Index\ProfileIndexUseCaseInterface;

class ProfileIndexInteractor implements ProfileIndexUseCaseInterface
{
    public function __construct()
    {
    }

    public function handle(ProfileIndexRequest $request)
    {
    }
}
