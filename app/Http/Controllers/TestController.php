<?php

namespace App\Http\Controllers;

use App\service\testinterface;
use Illuminate\Http\Request;
use Packages\Usecase\Post\Index\PostIndexRequest;
use Packages\Usecase\Post\Index\PostIndexUseCaseInterface;

class TestController extends Controller
{
    public function index(testinterface $test,PostIndexUseCaseInterface $usecase,PostIndexRequest $index)
    {
        $request = $index;
        $usecase->handle($request);
        $ok = $test->test_func();
        dd($ok);
    }
}
