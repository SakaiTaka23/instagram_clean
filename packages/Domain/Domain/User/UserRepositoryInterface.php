<?php

namespace Packages\Domain\Domain\User;

interface UserRepositoryInterface
{
    public function find($UserId);
}
