<?php

namespace App\Http\Controllers;

use Hoge\HogeInterface;

class TestController extends Controller
{
    // public function __construct(PostIndexRequest $index,PostIndexUseCaseInterface $usecase)
    // {
    //     $this->index = $index;
    //     $this->usecase = $usecase;
    // }

    public function index(HogeInterface $hoge)
    {
        dd($hoge->hoho());
        return;
    }
}
