<?php

namespace Packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\Usecase\Post\Create\PostCreateResponse;
use Packages\Usecase\Post\Create\PostCreateResquest;
use Packages\Usecase\Post\Create\PostCreateUseCaseInterface;

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
