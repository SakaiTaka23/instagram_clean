<?php

namespace Packages\UseCase\Post\Delete;

interface PostDeleteUseCaseInterface
{
    public function handle(PostDeleteRequest $request);
}
