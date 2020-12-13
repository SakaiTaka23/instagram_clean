<?php

namespace Packages\Domain\Application\Post;

use Packages\UseCase\Post\Search\PostSearchRequest;
use Packages\UseCase\Post\Search\PostSearchUseCaseInterface;

class PostSearchInteractor implements PostSearchUseCaseInterface
{
    public function handle(PostSearchRequest $request)
    {
    }
}
