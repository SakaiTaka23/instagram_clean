<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Domain\Application\Post\PostCreateInteractor;
use Packages\Domain\Application\Post\PostDeleteInteractor;
use Packages\Domain\Application\Post\PostEditInteractor;
use Packages\Domain\Application\Post\PostIndexInteractor;
use Packages\Domain\Application\Post\PostShowInteractor;
use Packages\Domain\Application\Post\PostStoreInteractor;
use Packages\Domain\Application\Post\PostUpdateInteractor;
use Packages\Domain\Application\Profile\ProfileEditInteractor;
use Packages\Domain\Application\Profile\ProfileIndexInteractor;
use Packages\Domain\Application\Profile\ProfileShowInteractor;
use Packages\Domain\Application\Profile\ProfileUpdateInteractor;
use Packages\UseCase\Post\Create\PostCreateUseCaseInterface;
use Packages\UseCase\Post\Delete\PostDeleteUseCaseInterface;
use Packages\UseCase\Post\Edit\PostEditUseCaseInterface;
use Packages\UseCase\Post\Index\PostIndexUseCaseInterface;
use Packages\UseCase\Post\Show\PostShowUseCaseInterface;
use Packages\UseCase\Post\Store\PostStoreUseCaseInterface;
use Packages\UseCase\Post\Update\PostUpdateUseCaseInterface;
use Packages\UseCase\Profile\Edit\ProfileEditUseCaseInterface;
use Packages\UseCase\Profile\Index\ProfileIndexUseCaseInterface;
use Packages\UseCase\Profile\Show\ProfileShowUseCaseInterface;
use Packages\UseCase\Profile\Update\ProfileUpdateUseCaseInterface;

class UseCaseServiceProvider extends ServiceProvider
{
    public $bindings = [
        PostCreateUseCaseInterface::class => PostCreateInteractor::class,
        PostDeleteUseCaseInterface::class => PostDeleteInteractor::class,
        PostEditUseCaseInterface::class => PostEditInteractor::class,
        PostIndexUseCaseInterface::class => PostIndexInteractor::class,
        PostShowUseCaseInterface::class => PostShowInteractor::class,
        PostStoreUseCaseInterface::class => PostStoreInteractor::class,
        PostUpdateUseCaseInterface::class => PostUpdateInteractor::class,

        ProfileEditUseCaseInterface::class => ProfileEditInteractor::class,
        ProfileIndexUseCaseInterface::class => ProfileIndexInteractor::class,
        ProfileShowUseCaseInterface::class => ProfileShowInteractor::class,
        ProfileUpdateUseCaseInterface::class => ProfileUpdateInteractor::class,
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
