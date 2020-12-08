<?php

namespace Packages\UseCase\Profile\Update;

interface ProfileUpdatePresenterInterface
{
    public function output(ProfileUpdateResponse $outputData);
}
