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

        $this->app->bind(
            \Packages\UseCase\Post\Create\PostCreateUseCaseInterface::class,
            \Packages\Domain\Application\Post\PostCreateInteractor::class
        );

        $this->app->bind(
            \Packages\UseCase\Post\Edit\PostEditUseCaseInterface::class,
            \Packages\Domain\Application\Post\PostEditInteractor::class
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

        $this->app->bind(
            \Packages\UseCase\Post\Create\PostCreatePresenterInterface::class,
            \App\Http\Presenters\Post\PostCreatePresenter::class
        );

        $this->app->bind(
            \Packages\UseCase\Post\Edit\PostEditPresenterInterface::class,
            \App\Http\Presenters\Post\PostEditPresenter::class
        );

        $this->app->bind(
            \Packages\UseCase\Post\Index\PostIndexPresenterInterface::class,
            \App\Http\Presenters\Post\PostIndexPresenter::class
        );

        $this->app->bind(
            \Packages\UseCase\Post\Show\PostShowPresenterInterface::class,
            \App\Http\Presenters\Post\PostShowPresenter::class
        );

        $this->app->bind(
            \Packages\UseCase\Post\Store\PostStorePresenterInterface::class,
            \App\Http\Presenters\Post\PostStorePresenter::class
        );

        $this->app->singleton(\App\Http\Middleware\CleanArchitectureMiddleware::class);
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
    }
}
