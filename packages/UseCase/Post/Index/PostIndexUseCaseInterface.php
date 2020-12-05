<?php

namespace Packages\UseCase\Post\Index;

interface PostIndexUseCaseInterface
{
    public function handle(PostIndexRequest $request);
}
