<?php

namespace Packages\Domain\Application\Profile;

use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\UseCase\Profile\Index\ProfileIndexPresenterInterface;
use Packages\UseCase\Profile\Index\ProfileIndexRequest;
use Packages\UseCase\Profile\Index\ProfileIndexResponse;
use Packages\UseCase\Profile\Index\ProfileIndexUseCaseInterface;

class ProfileIndexInteractor implements ProfileIndexUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository, ProfileIndexPresenterInterface $presenter)
    {
        $this->postRepository = $postRepository;
        $this->presenter = $presenter;
    }

    public function handle(ProfileIndexRequest $request)
    {
        $userId = $request->getUserId();
        $posts = $this->postRepository->find_from_userid($userId);
        $response = new ProfileIndexResponse($posts);
        $this->presenter->output($response);
    }
}
