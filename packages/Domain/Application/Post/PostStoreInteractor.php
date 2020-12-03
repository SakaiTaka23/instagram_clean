<?php

namespace packages\Domain\Application\Post;

use packages\Infrastructure\Post\PostRepository;
use packages\Usecase\Post\Store\PostStoreRequest;
use packages\Usecase\Post\Store\PostStoreResponse;
use packages\Usecase\Post\Store\PostStoreUseCaseInterface;

class PostStoreInteractor implements PostStoreUseCaseInterface
{
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(PostStoreRequest $request)
    {
        $image = $request->getPhoto();
        $image_path = $this->postRepository->storeImage($image);
        $created_post = $request;
        $created_post->image = $image_path;
        $this->postRepository->save($created_post);
        return new PostStoreResponse($created_post->id);
    }
}
