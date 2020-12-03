<?php

namespace packages\Infrastructure\User;

use Illuminate\Support\Facades\DB;
use packages\Domain\Domain\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function find($UserId)
    {
        $user = DB::table('users')->where('id',$UserId)->first();
        return $user;
    }
}