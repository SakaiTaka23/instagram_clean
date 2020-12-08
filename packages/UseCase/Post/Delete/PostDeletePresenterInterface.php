<?php

namespace Packages\UseCase\Post\Delete;

interface PostDeletePresenterInterface
{
    public function output(PostDeleteResponse $outputData);
}
