<?php

namespace Packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\Usecase\Post\Index\PostIndexRequest;
use Packages\UseCase\Post\Index\PostIndexResponse;
use Packages\Usecase\Post\Index\PostIndexUseCaseInterface;

class PostIndexInteractor implements PostIndexUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(PostIndexRequest $request)
    {
        $userId = $request->getUserId();
        $posts = $this->postRepository->find_from_userid($userId);
        return new PostIndexResponse($posts);
    }
}
