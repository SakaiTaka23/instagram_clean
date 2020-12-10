<?php

namespace Packages\Domain\Application\Profile;

use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\Domain\Domain\Profile\Profile;
use Packages\Domain\Domain\Profile\ProfileRepositoryInterface;
use Packages\UseCase\Profile\Show\ProfileShowPresenterInterface;
use Packages\UseCase\Profile\Show\ProfileShowRequest;
use Packages\UseCase\Profile\Show\ProfileShowResponse;
use Packages\UseCase\Profile\Show\ProfileShowUseCaseInterface;

class ProfileShowInteractor implements ProfileShowUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postPepository, ProfileRepositoryInterface $porfileRepository, ProfileShowPresenterInterface $presenter)
    {
        $this->postRepository = $postPepository;
        $this->profileRepository = $porfileRepository;
        $this->presenter = $presenter;
    }

    public function handle(ProfileShowRequest $request)
    {
        $UserId = $request->getUserId();
        $profile = $this->profileRepository->find($UserId);
        $profile = new Profile($profile->id,$profile->user_id,$profile->username,$profile->description,$profile->url,$profile->profile_photo_path);
        $posts = $this->postRepository->find_from_userid_simple($UserId);
        $response = new ProfileShowResponse($profile,$posts);
        $this->presenter->output($response);
    }
}
