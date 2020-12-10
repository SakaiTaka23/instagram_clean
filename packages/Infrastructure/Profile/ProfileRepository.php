<?php

namespace Packages\Infrastructure\Profile;

use Illuminate\Support\Facades\DB;
use Packages\Domain\Domain\Profile\Profile;
use Packages\Domain\Domain\Profile\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function find($ProfileId)
    {
        $profile = DB::table('profiles')->where('id', $ProfileId)->first();
        return $profile;
    }

    public function save(Profile $profile)
    {
        DB::table('profiles')
            ->update(
                ['id' => $profile->getId()],
                ['user_id' => $profile->getUserId()],
                ['username' => $profile->getUserName()],
                ['description' => $profile->getDescription()],
                ['url' => $profile->getUrl()],
                ['profile_image_path' => $profile->getProfilePhotoPath()]
            );
    }
}
