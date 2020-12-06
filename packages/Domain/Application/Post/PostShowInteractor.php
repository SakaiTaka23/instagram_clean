<?php

namespace Packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\Post;
use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\UseCase\Post\Show\PostShowPresenterInterface;
use Packages\Usecase\Post\Show\PostShowRequest;
use Packages\Usecase\Post\Show\PostShowResponse;
use Packages\Usecase\Post\Show\PostShowUseCaseInterface;

class PostShowInteractor implements PostShowUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository,PostShowPresenterInterface $presenter)
    {
        $this->postRepository = $postRepository;
        $this->presenter = $presenter;
    }

    public function handle(PostShowRequest $request)
    {
        $postId = $request->getPostId();
        $post = $this->postRepository->find_from_postid($postId);
        $response = new Post($post->id, $post->user_id, $post->caption, $post->post_photo_path, $post->created_at, $post->updated_at);
        $response = new PostShowResponse($response);
        $this->presenter->output($response);
    }
}
