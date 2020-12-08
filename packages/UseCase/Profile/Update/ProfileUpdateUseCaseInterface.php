<?php

namespace Packages\UseCase\Profile\Update;

interface ProfileUpdateUseCaseInterface
{
    public function handle(ProfileUpdateRequest $request);
}
