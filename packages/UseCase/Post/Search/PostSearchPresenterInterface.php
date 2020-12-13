<?php

namespace Packages\UseCase\Post\Search;

interface PostSearchPresenterInterface
{
    public function output(PostSearchResponse $outputData);
}
