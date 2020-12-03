<?php

namespace packages\Domain\Application\Profile;

use packages\Domain\Domain\Profile\ProfileRepositoryInterface;
use packages\Usecase\Profile\Index\ProfileIndexRequest;
use packages\Usecase\Profile\Index\ProfileIndexResponse;
use packages\Usecase\Profile\Index\ProfileIndexUseCaseInterface;

class ProfileIndexInteractor implements ProfileIndexUseCaseInterface
{
    public function __construct(ProfileRepositoryInterface $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    public function handle(ProfileIndexRequest $request)
    {
        $profileId = $request->getProfileId();
        $profile = $this->profileRepository->find($profileId);
        return new ProfileIndexResponse($profile);
    }
}
