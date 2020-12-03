<?php

namespace App\Http\Controllers;

use App\service\testinterface;
use Hoge\Production\Hoge;
use Illuminate\Http\Request;
use Packages\Usecase\Post\Index\PostIndexRequest;
use Packages\Usecase\Post\Index\PostIndexUseCaseInterface;

class TestController extends Controller
{
    // public function __construct(PostIndexRequest $index,PostIndexUseCaseInterface $usecase)
    // {
    //     $this->index = $index;
    //     $this->usecase = $usecase;
    // }

    public function index(testinterface $test)
    {
        $hoge = new Hoge();
        dd($hoge->hoho);
        $ok = $test->test_func();
        dd($ok);
    }
}
