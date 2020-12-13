<?php

namespace Packages\UseCase\Post\Search;

class PostSearchRequest
{
    public function __construct(string $keyword)
    {
        $this->keyword = $keyword;
    }

    public function getKeyWord()
    {
        return $this->keyword;
    }
}
