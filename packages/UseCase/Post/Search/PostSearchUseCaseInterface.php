<?php

namespace Packages\UseCase\Post\Search;

interface PostSearchUseCaseInterface
{
    public function handle(PostSearchRequest $request);
}
