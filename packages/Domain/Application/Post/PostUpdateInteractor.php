<?php

namespace Packages\Domain\Application\Post;

use Packages\Infrastructure\Post\PostRepository;
use Packages\UseCase\Post\Update\PostUpdatePresenterInterface;
use Packages\UseCase\Post\Update\PostUpdateRequest;
use Packages\UseCase\Post\Update\PostUpdateUseCaseInterface;

class PostUpdateInteractor implements PostUpdateUseCaseInterface
{
    public function __construct(PostRepository $postRepository, PostUpdatePresenterInterface $presenter)
    {
        $this->postRepository = $postRepository;
        $this->presenter = $presenter;
    }

    public function handle(PostUpdateRequest $request)
    {
    }
}
