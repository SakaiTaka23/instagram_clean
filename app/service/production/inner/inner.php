<?php

namespace App\service\production\inner;

use App\service\some_func;

class inner
{
    public function inner()
    {
        $some_func = new some_func();
        dd($some_func->parent());
    }
}
