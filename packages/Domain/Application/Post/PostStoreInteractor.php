<?php

namespace Packages\Domain\Application\Post;

use Packages\Infrastructure\Post\PostRepository;
use Packages\Usecase\Post\Store\PostStoreRequest;
use Packages\Usecase\Post\Store\PostStoreResponse;
use Packages\Usecase\Post\Store\PostStoreUseCaseInterface;

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
