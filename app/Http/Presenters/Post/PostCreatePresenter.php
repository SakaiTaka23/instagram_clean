<?php

namespace App\Http\Presenters\Post;

use Packages\UseCase\Post\Create\PostCreatePresenterInterface;
use Packages\UseCase\Post\Create\PostCreateResponse;

class PostCreatePresenter implements PostCreatePresenterInterface
{
    public function output(PostCreateResponse $outputData)
    {
    }
}
