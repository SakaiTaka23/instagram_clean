<?php

namespace Packages\Domain\Application\Profile;

use Packages\Domain\Domain\Profile\ProfileRepositoryInterface;
use Packages\Usecase\Profile\Index\ProfileIndexRequest;
use Packages\Usecase\Profile\Index\ProfileIndexResponse;
use Packages\Usecase\Profile\Index\ProfileIndexUseCaseInterface;

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
