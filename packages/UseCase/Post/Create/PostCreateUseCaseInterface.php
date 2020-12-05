<?php

namespace Packages\UseCase\Post\Create;

interface PostCreateUseCaseInterface
{
    public function handle(PostCreateRequest $request);
}
