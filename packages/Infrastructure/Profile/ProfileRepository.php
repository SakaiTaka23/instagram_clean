<?php

namespace Packages\Infrastructure\Profile;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Packages\Domain\Domain\Profile\Profile;
use Packages\Domain\Domain\Profile\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function delete_old_image(string $image_path)
    {
        Storage::disk('public')->delete($image_path);
    }

    public function find(int $UserId)
    {
        $profile = DB::table('profiles')->where('id', $UserId)->first();
        return $profile;
    }

    public function storeImage($image)
    {
        $imagePath = $image->store('profile_image', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(600, 600)->save();
        return $imagePath;
    }

    public function update(Profile $profile)
    {
        DB::table('profiles')
            ->where('user_id', $profile->getUserId())
            ->update([
                'username' => $profile->getUserName(),
                'description' => $profile->getDescription(),
                'url' => $profile->getUrl(),
                'profile_photo_path' => $profile->getProfilePhotoPath()
            ]);
    }
}
