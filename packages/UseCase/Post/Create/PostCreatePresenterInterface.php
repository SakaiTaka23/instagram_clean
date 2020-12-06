<?php

namespace Packages\UseCase\Post\Create;

interface PostCreatePresenterInterface
{
    public function output(PostCreateResponse $outputData);
}
