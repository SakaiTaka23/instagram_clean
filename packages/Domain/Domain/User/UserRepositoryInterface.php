<?php

namespace packages\Domain\Domain\User;

interface UserRepositoryInterface
{
    public function find($UserId);
}
