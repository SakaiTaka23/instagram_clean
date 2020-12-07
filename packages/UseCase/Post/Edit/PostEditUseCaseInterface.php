<?php

namespace Packages\UseCase\Post\Edit;

interface PostEditUseCaseInterface
{
    public function handle(PostEditRequest $request);
}
