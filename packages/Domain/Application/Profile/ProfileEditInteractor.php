<?php

namespace Packages\Domain\Application\Profile;

use Packages\Domain\Domain\Profile\Profile;
use Packages\Domain\Domain\Profile\ProfileRepositoryInterface;
use Packages\UseCase\Profile\Edit\ProfileEditPresenterInterface;
use Packages\UseCase\Profile\Edit\ProfileEditRequest;
use Packages\UseCase\Profile\Edit\ProfileEditResponse;
use Packages\UseCase\Profile\Edit\ProfileEditUseCaseInterface;

class ProfileEditInteractor implements ProfileEditUseCaseInterface
{
    public function __construct(ProfileRepositoryInterface $profileRepostitoy, ProfileEditPresenterInterface $presenter)
    {
        $this->profileRepository = $profileRepostitoy;
        $this->presenter = $presenter;
    }

    public function handle(ProfileEditRequest $request)
    {
        $UserId = $request->getUserId();
        $profile = $this->profileRepository->find($UserId);
        $profile = new Profile($profile->id, $profile->user_id, $profile->username, $profile->description, $profile->url, $profile->profile_photo_path);
        $response = new ProfileEditResponse($profile);
        $this->presenter->output($response);
    }
}
