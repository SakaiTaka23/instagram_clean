<?php

namespace packages\Usecase\Profile\Index;

interface ProfileIndexUseCaseInterface
{
    public function handle(ProfileIndexRequest $request);
}
