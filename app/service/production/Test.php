<?php

namespace App\service\production;

use App\service\production\inner\inner;
use App\service\some_func;
use App\service\testinterface;

class test implements testinterface
{
    public function test_func()
    {
        $test2 = new Test2();
        $some_func = new some_func();
        $this->any_func($test2, $some_func);
        return "test";
    }

    public function any_func(Test2 $test2, some_func $some_func)
    {
        $inner = new inner();
        $inner->inner();
        $test2_result = $test2->test2func();
        $some_func_result = $some_func->parent();
        $ok = "ok";
        dd($test2_result, $some_func_result);
        return $ok;
    }
}
