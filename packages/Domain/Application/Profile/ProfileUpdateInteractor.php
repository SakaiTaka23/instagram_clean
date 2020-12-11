<?php

namespace Packages\Domain\Application\Profile;

use Packages\Domain\Domain\Profile\Profile;
use Packages\Domain\Domain\Profile\ProfileRepositoryInterface;
use Packages\UseCase\Profile\Update\ProfileUpdatePresenterInterface;
use Packages\UseCase\Profile\Update\ProfileUpdateRequest;
use Packages\UseCase\Profile\Update\ProfileUpdateResponse;
use Packages\UseCase\Profile\Update\ProfileUpdateUseCaseInterface;

class ProfileUpdateInteractor implements ProfileUpdateUseCaseInterface
{
    public function __construct(ProfileRepositoryInterface $profileRepository, ProfileUpdatePresenterInterface $presenter)
    {
        $this->profileRepository = $profileRepository;
        $this->presenter = $presenter;
    }

    public function handle(ProfileUpdateRequest $request)
    {
        $image_path = $this->profileRepository->find($request->getUserId())->profile_photo_path;
        if (!is_null($request->getPhoto())) {
            $this->profileRepository->delete_old_image($image_path);

            $image = $request->getPhoto();
            $image_path = $this->profileRepository->storeImage($image);
        }

        $profile = new Profile(0, $request->getUserId(), $request->getUsername(), $request->getDescription(), $request->getUrl(), $image_path);
        $this->profileRepository->update($profile);
        $response = new ProfileUpdateResponse($request->getUserId());
        $this->presenter->output($response);
    }
}
