<?php

namespace Packages\UseCase\Profile\Show;

interface ProfileShowUseCaseInterface
{
    public function handle(ProfileShowRequest $request);
}
