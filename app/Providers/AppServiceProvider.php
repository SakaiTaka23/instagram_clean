<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerForInMemory();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    private function registerForInMemory()
    {
        $this->app->singleton(
            \packages\Domain\Domain\Post\PostRepositoryInterface::class,
            \packages\Infrastructure\Post\PostRepository::class
        );

        $this->app->singleton(
            \packages\Domain\Domain\Profile\ProfileRepositoryInterface::class,
            \packages\Infrastructure\Profile\ProfileRepository::class
        );

        $this->app->singleton(
            \packages\Domain\Domain\User\UserRepositoryInterface::class,
            \packages\Infrastructure\User\UserRepository::class
        );

        $this->app->bind(
            \packages\UseCase\Post\Create\PostCreateUseCaseInterface::class,
            \packages\Domain\Application\Post\PostCreateInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\Post\Index\PostIndexUseCaseInterface::class,
            \packages\Domain\Application\Post\PostIndexInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\Post\Show\PostShowUseCaseInterface::class,
            \packages\Domain\Application\Post\PostShowInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\Post\Store\PostStoreUseCaseInterface::class,
            \packages\Domain\Application\Post\PostStoreInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\Profile\Index\ProfileIndexUseCaseInterface::class,
            \packages\Domain\Application\Profile\ProfileIndexInteractor::class
        );
    }
}
