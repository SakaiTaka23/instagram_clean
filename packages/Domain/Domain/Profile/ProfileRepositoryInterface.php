<?php

namespace Packages\Domain\Domain\Profile;


interface ProfileRepositoryInterface
{
    public function delete_old_image(string $image_path);
    public function find(int $UserId);
    public function storeImage($image);
    public function update(Profile $profile);
}
