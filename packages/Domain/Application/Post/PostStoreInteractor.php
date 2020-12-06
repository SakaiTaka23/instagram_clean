<?php

namespace Packages\Domain\Application\Post;

use Packages\Domain\Domain\Post\Post;
use Packages\Infrastructure\Post\PostRepository;
use Packages\UseCase\Post\Store\PostStorePresenterInterface;
use Packages\Usecase\Post\Store\PostStoreRequest;
use Packages\Usecase\Post\Store\PostStoreResponse;
use Packages\Usecase\Post\Store\PostStoreUseCaseInterface;

class PostStoreInteractor implements PostStoreUseCaseInterface
{
    public function __construct(PostRepository $postRepository,PostStorePresenterInterface $presenter)
    {
        $this->postRepository = $postRepository;
        $this->presenter = $presenter;
    }

    public function handle(PostStoreRequest $request)
    {
        $image = $request->getPhoto();
        $image_path = $this->postRepository->storeImage($image);
        $created_post = new Post(0, $request->getUserId(), $request->getCaption(), $image_path, now(), now());
        $id = $this->postRepository->create_post_get_id($created_post);
        $response = new PostStoreResponse($id);
        $this->presenter->output($response);
    }
}
