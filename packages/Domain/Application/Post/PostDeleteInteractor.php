<?php

namespace Packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\UseCase\Post\Delete\PostDeletePresenterInterface;
use Packages\UseCase\Post\Delete\PostDeleteRequest;
use Packages\UseCase\Post\Delete\PostDeleteResponse;
use Packages\UseCase\Post\Delete\PostDeleteUseCaseInterface;

class PostDeleteInteractor implements PostDeleteUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository, PostDeletePresenterInterface $presenter)
    {
        $this->postRepository = $postRepository;
        $this->presenter = $presenter;
    }

    public function handle(PostDeleteRequest $request)
    {
        $this->postRepository->delete_post($request->getPostId());
        $response = new PostDeleteResponse();
        $this->presenter->output($response);
    }
}
