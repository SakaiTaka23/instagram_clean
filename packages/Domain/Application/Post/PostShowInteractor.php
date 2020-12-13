<?php

namespace Packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\Post;
use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\Domain\Domain\Profile\ProfileRepositoryInterface;
use Packages\UseCase\Post\Show\PostShowPresenterInterface;
use Packages\Usecase\Post\Show\PostShowRequest;
use Packages\Usecase\Post\Show\PostShowResponse;
use Packages\Usecase\Post\Show\PostShowUseCaseInterface;

class PostShowInteractor implements PostShowUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository, ProfileRepositoryInterface $profileRepository, PostShowPresenterInterface $presenter)
    {
        $this->postRepository = $postRepository;
        $this->profileRepository = $profileRepository;
        $this->presenter = $presenter;
    }

    public function handle(PostShowRequest $request)
    {
        $postId = $request->getPostId();
        $post = $this->postRepository->find_from_postid($postId);

        if (!is_null($post)) {
            $post = new Post($post->id, $post->user_id, $post->caption, $post->post_photo_path, $post->created_at, $post->updated_at);
            $profile = $this->profileRepository->find($post->user_id);
        }
        $response = new PostShowResponse($profile->user_id ?? null, $profile->profile_photo_path ?? null, $profile->username ?? null, $post);
        $this->presenter->output($response);
    }
}
