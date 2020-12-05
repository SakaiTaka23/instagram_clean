<?php

namespace App\Http\Models\Post\Create;

class PostCreateViewModel
{
    public function __construct($infos)
    {
        $this->infos = $infos;
    }
}