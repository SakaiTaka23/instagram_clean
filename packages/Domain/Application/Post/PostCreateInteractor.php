<?php

namespace Packages\Domain\Application\Post;

use Packages\UseCase\Post\Create\PostCreatePresenterInterface;
use Packages\UseCase\Post\Create\PostCreateRequest;
use Packages\UseCase\Post\Create\PostCreateResponse;
use Packages\UseCase\Post\Create\PostCreateUseCaseInterface;

class PostCreateInteractor implements PostCreateUseCaseInterface
{
    public function __construct(PostCreatePresenterInterface $presenter)
    {
        $this->presenter = $presenter;
    }

    public function handle(PostCreateRequest $request)
    {
        $response = new PostCreateResponse($request);
        $this->presenter->output($response);
    }
}
