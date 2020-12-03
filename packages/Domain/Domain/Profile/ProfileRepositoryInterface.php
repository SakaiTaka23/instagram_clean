<?php

namespace Packages\Domain\Domain\Profile;


interface ProfileRepositoryInterface
{
    public function find($ProfileId);
    public function save(Profile $profile);
}
