<?php

namespace App\Http\Presenters\Post;

use Packages\UseCase\Post\Search\PostSearchPresenterInterface;
use Packages\UseCase\Post\Search\PostSearchResponse;

class PostSearchPresenter implements PostSearchPresenterInterface
{
    public function output(PostSearchResponse $outputData)
    {
    }
}
