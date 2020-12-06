<?php

namespace Packages\UseCase\Post\Store;

interface PostStorePresenterInterface
{
    public function output(PostStoreResponse $outputData);
}
