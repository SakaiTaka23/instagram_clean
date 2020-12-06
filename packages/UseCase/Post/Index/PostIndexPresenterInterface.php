<?php

namespace Packages\UseCase\Post\Index;

interface PostIndexPresenterInterface
{
    public function output(PostIndexResponse $outputData);
}
