<?php

namespace App\service\production;

use app\service\testinterface;

class test implements testinterface
{
    public function test_func()
    {
        return "ok";
    }
}
