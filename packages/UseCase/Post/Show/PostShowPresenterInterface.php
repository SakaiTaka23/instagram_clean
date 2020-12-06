<?php

namespace Packages\UseCase\Post\Show;

interface PostShowPresenterInterface
{
    public function output(PostShowResponse $outputData);
}
