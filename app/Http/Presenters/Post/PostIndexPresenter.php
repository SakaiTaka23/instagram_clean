<?php

namespace App\Http\Presenters\Post;

use Packages\UseCase\Post\Index\PostIndexPresenterInterface;
use Packages\UseCase\Post\Index\PostIndexResponse;

class PostIndexPresenter implements PostIndexPresenterInterface
{
    public function output(PostIndexResponse $outputData)
    {
    }
}
