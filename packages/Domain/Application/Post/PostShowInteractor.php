<?php

namespace packages\Domain\Application\Post;

use packages\Domain\Domain\Post\PostRepositoryInterface;
use packages\Usecase\Post\Show\PostShowRequest;
use packages\Usecase\Post\Show\PostShowResponse;
use packages\Usecase\Post\Show\PostShowUseCaseInterface;

class PostShowInteractor implements PostShowUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(PostShowRequest $request)
    {
        $postId = $request->getPostId();
        $post = $this->postRepository->find_from_postid($postId);
        return new PostShowResponse($post);
    }
}
