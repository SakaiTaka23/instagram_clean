<?php

namespace Packages\Usecase\Post\Index;

interface PostIndexUseCaseInterface
{
    public function handle(PostIndexRequest $request);
}
