<?php

namespace Packages\Usecase\Profile\Index;

interface ProfileIndexUseCaseInterface
{
    public function handle(ProfileIndexRequest $request);
}
