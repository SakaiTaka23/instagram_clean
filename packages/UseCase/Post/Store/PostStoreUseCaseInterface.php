<?php

namespace Packages\UseCase\Post\Store;

interface PostStoreUseCaseInterface
{
    public function handle(PostStoreRequest $request);
}
