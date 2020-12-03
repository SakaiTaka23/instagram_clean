<?php

namespace packages\Domain\Domain\Profile;


interface ProfileRepositoryInterface
{
    public function find($ProfileId);
    public function save(Profile $profile);
}
