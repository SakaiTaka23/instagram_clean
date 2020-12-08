<?php

namespace Packages\Domain\Application\Post;

use Packages\Infrastructure\Post\PostRepository;
use Packages\UseCase\Post\Update\PostUpdatePresenterInterface;
use Packages\UseCase\Post\Update\PostUpdateRequest;
use Packages\UseCase\Post\Update\PostUpdateResponse;
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
        $this->postRepository->update_post($request->getPostId(), $request->getCaption(), $request->getUpdatedAt());
        $response = new PostUpdateResponse($request->getPostId());
        $this->presenter->output($response);
    }
}
