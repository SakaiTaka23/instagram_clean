<?php

namespace packages\Domain\Application\Post;

use packages\Domain\Domain\Post\PostRepositoryInterface;
use packages\Usecase\Post\Create\PostCreateResponse;
use packages\Usecase\Post\Create\PostCreateResquest;
use packages\Usecase\Post\Create\PostCreateUseCaseInterface;

class PostCreateInteractor implements PostCreateUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(PostCreateResquest $request)
    {
        return new PostCreateResponse();
    }
}
