<?php

namespace Packages\UseCase\Profile\Index;

interface ProfileIndexUseCaseInterface
{
    public function handle(ProfileIndexRequest $request);
}
