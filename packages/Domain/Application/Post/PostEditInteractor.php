<?php

namespace Packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\Post;
use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\UseCase\Post\Edit\PostEditPresenterInterface;
use Packages\UseCase\Post\Edit\PostEditRequest;
use Packages\UseCase\Post\Edit\PostEditResponse;
use Packages\UseCase\Post\Edit\PostEditUseCaseInterface;

class PostEditInteractor implements PostEditUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository, PostEditPresenterInterface $presenter)
    {
        $this->postRepository = $postRepository;
        $this->presenter = $presenter;
    }

    public function handle(PostEditRequest $request)
    {
        $postId = $request->getPostId();
        $post = $this->postRepository->find_from_postid($postId);
        $response = new Post($post->id, $post->user_id, $post->caption, $post->post_photo_path, $post->created_at, $post->updated_at);
        $response = new PostEditResponse($response);
        $this->presenter->output($response);
    }
}
