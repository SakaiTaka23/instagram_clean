<?php

namespace Packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\UseCase\Post\Create\PostCreateRequest;
use Packages\UseCase\Post\Create\PostCreateResponse;
use Packages\UseCase\Post\Create\PostCreateUseCaseInterface;

class PostCreateInteractor implements PostCreateUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(PostCreateRequest $request)
    {
        return new PostCreateResponse();
    }
}
