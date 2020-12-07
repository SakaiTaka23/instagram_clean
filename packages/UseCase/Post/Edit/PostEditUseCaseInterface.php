<?php

namespace packages\UseCase\Post\Edit;

interface PostEditUseCaseInterface
{
    public function handle(PostEditRequest $request);
}
