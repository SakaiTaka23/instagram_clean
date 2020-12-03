<?php

namespace packages\Usecase\Post\Create;

interface PostCreateUseCaseInterface
{
    public function handle(PostCreateResquest $request);
}
