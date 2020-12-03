<?php

namespace packages\Usecase\Post\Index;

interface PostIndexUseCaseInterface
{
    public function handle(PostIndexRequest $request);
}
