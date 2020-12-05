<?php

namespace Packages\UseCase\Post\Show;

interface PostShowUseCaseInterface
{
    public function handle(PostShowRequest $request);
}
