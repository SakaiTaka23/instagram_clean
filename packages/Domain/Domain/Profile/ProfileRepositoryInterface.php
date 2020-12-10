<?php

namespace Packages\Domain\Domain\Profile;


interface ProfileRepositoryInterface
{
    public function find(int $ProfileId);
    public function storeImage($image);
    public function update(Profile $profile);
}
