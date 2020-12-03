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
        $this->app->bind(
            \App\service\testinterface::class,
            \App\service\production\test::class
        );

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
            \Packages\Domain\Domain\Post\PostRepositoryInterface::class,
            \Packages\Infrastructure\Post\PostRepository::class
        );

        $this->app->singleton(
            \Packages\Domain\Domain\Profile\ProfileRepositoryInterface::class,
            \Packages\Infrastructure\Profile\ProfileRepository::class
        );

        $this->app->singleton(
            \Packages\Domain\Domain\User\UserRepositoryInterface::class,
            \Packages\Infrastructure\User\UserRepository::class
        );

        $this->app->bind(
            \Packages\UseCase\Post\Create\PostCreateUseCaseInterface::class,
            \Packages\Domain\Application\Post\PostCreateInteractor::class
        );

        $this->app->bind(
            \Packages\UseCase\Post\Index\PostIndexUseCaseInterface::class,
            \Packages\Domain\Application\Post\PostIndexInteractor::class
        );

        $this->app->bind(
            \Packages\UseCase\Post\Show\PostShowUseCaseInterface::class,
            \Packages\Domain\Application\Post\PostShowInteractor::class
        );

        $this->app->bind(
            \Packages\UseCase\Post\Store\PostStoreUseCaseInterface::class,
            \Packages\Domain\Application\Post\PostStoreInteractor::class
        );

        $this->app->bind(
            \Packages\UseCase\Profile\Index\ProfileIndexUseCaseInterface::class,
            \Packages\Domain\Application\Profile\ProfileIndexInteractor::class
        );
    }
}
