<?php

namespace packages\Domain\Application\Post;

use packages\Domain\Domain\Post\PostRepositoryInterface;
use packages\Usecase\Post\Index\PostIndexRequest;
use packages\UseCase\Post\Index\PostIndexResponse;
use packages\Usecase\Post\Index\PostIndexUseCaseInterface;

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
