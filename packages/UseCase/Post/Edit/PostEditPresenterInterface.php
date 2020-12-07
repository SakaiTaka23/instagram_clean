<?php

namespace packages\UseCase\Post\Edit;

interface PostEditPresenterInterface
{
    public function output(PostEditResponse $outputData);
}
