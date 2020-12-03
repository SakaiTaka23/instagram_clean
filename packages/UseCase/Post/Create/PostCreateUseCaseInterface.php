<?php

namespace Packages\Usecase\Post\Create;

interface PostCreateUseCaseInterface
{
    public function handle(PostCreateResquest $request);
}
