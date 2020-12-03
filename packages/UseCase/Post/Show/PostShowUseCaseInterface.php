<?php

namespace Packages\Usecase\Post\Show;

interface PostShowUseCaseInterface
{
    public function handle(PostShowRequest $request);
}
