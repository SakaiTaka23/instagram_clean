<?php

namespace Packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\UseCase\Post\Search\PostSearchPresenterInterface;
use Packages\UseCase\Post\Search\PostSearchRequest;
use Packages\UseCase\Post\Search\PostSearchResponse;
use Packages\UseCase\Post\Search\PostSearchUseCaseInterface;

class PostSearchInteractor implements PostSearchUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository, PostSearchPresenterInterface $presenter)
    {
        $this->postRepository = $postRepository;
        $this->presenter = $presenter;
    }

    public function handle(PostSearchRequest $request)
    {
        $keyword = $request->getKeyWord();
        $posts = $this->postRepository->find_from_keyword($keyword);
        $response = new PostSearchResponse($keyword,$posts);
        $this->presenter->output($response);
    }
}
