<?php

namespace Packages\Usecase\Post\Store;

interface PostStoreUseCaseInterface
{
    public function handle(PostStoreRequest $request);
}
