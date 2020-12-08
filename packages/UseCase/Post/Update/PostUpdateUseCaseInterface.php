<?php

namespace Packages\UseCase\Post\Update;

interface PostUpdateUseCaseInterface
{
    public function handle(PostUpdateRequest $request);
}
