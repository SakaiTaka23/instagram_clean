<?php

namespace packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\PostRepositoryInterface;
use packages\UseCase\Post\Edit\PostEditPresenterInterface;
use packages\UseCase\Post\Edit\PostEditRequest;
use packages\UseCase\Post\Edit\PostEditUseCaseInterface;

class PostEditInteractor implements PostEditUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository, PostEditPresenterInterface $presenter)
    {
        $this->postRepository = $postRepository;
        $this->presenter = $presenter;
    }

    public function handle(PostEditRequest $request)
    {
    }
}
