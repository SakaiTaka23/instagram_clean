<?php

namespace Packages\Domain\Application\Post;

use Packages\UseCase\Post\Delete\PostDeletePresenterInterface;
use Packages\UseCase\Post\Delete\PostDeleteRequest;
use Packages\UseCase\Post\Delete\PostDeleteUseCaseInterface;

class PostDeleteInteractor implements PostDeleteUseCaseInterface
{
    public function __construct(PostDeletePresenterInterface $presenter)
    {
        $this->presenter = $presenter;
    }

    public function handle(PostDeleteRequest $request)
    {
    }
}
