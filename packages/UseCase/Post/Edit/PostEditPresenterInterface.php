<?php

namespace Packages\UseCase\Post\Edit;

interface PostEditPresenterInterface
{
    public function output(PostEditResponse $outputData);
}
