<?php

namespace Packages\UseCase\Profile\Edit;

interface ProfileEditPresenterInterface
{
    public function output(ProfileEditResponse $outputData);
}
