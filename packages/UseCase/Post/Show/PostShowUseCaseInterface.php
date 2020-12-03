<?php

namespace packages\Usecase\Post\Show;

interface PostShowUseCaseInterface
{
    public function handle(PostShowRequest $request);
}
