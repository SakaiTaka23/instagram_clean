<?php

namespace Packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\UseCase\Post\Index\PostIndexPresenterInterface;
use Packages\Usecase\Post\Index\PostIndexRequest;
use Packages\UseCase\Post\Index\PostIndexResponse;
use Packages\Usecase\Post\Index\PostIndexUseCaseInterface;

class PostIndexInteractor implements PostIndexUseCaseInterface
{
    public function __construct(PostRepositoryInterface $postRepository, PostIndexPresenterInterface $presenter)
    {
        $this->postRepository = $postRepository;
        $this->presenter = $presenter;
    }

    public function handle(PostIndexRequest $request)
    {
        $posts = $this->postRepository->get_random_posts();
        $response = new PostIndexResponse($posts);
        $this->presenter->output($response);
    }
}
