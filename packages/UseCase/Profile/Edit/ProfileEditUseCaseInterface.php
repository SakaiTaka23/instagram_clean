<?php

namespace Packages\UseCase\Profile\Edit;

interface ProfileEditUseCaseInterface
{
    public function handle(ProfileEditRequest $request);
}
