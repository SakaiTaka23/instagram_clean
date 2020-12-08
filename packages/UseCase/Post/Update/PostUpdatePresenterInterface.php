<?php

namespace Packages\UseCase\Post\Update;

interface PostUpdatePresenterInterface
{
    public function output(PostUpdateResponse $outputData);
}
