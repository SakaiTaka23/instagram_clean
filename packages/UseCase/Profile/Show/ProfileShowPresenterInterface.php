<?php

namespace Packages\UseCase\Profile\Show;

interface ProfileShowPresenterInterface
{
    public function output(ProfileShowResponse $outputData);
}
