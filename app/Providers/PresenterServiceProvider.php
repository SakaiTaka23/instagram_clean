<?php

namespace App\Providers;

use App\Http\Presenters\Post\PostCreatePresenter;
use App\Http\Presenters\Post\PostDeletePresenter;
use App\Http\Presenters\Post\PostEditPresenter;
use App\Http\Presenters\Post\PostIndexPresenter;
use App\Http\Presenters\Post\PostSearchPresenter;
use App\Http\Presenters\Post\PostShowPresenter;
use App\Http\Presenters\Post\PostStorePresenter;
use App\Http\Presenters\Post\PostUpdatePresenter;
use App\Http\Presenters\Profile\ProfileEditPresenter;
use App\Http\Presenters\Profile\ProfileIndexPresenter;
use App\Http\Presenters\Profile\ProfileShowPresenter;
use App\Http\Presenters\Profile\ProfileUpdatePresenter;
use Illuminate\Support\ServiceProvider;
use Packages\UseCase\Post\Create\PostCreatePresenterInterface;
use Packages\UseCase\Post\Delete\PostDeletePresenterInterface;
use Packages\UseCase\Post\Edit\PostEditPresenterInterface;
use Packages\UseCase\Post\Index\PostIndexPresenterInterface;
use Packages\UseCase\Post\Search\PostSearchPresenterInterface;
use Packages\UseCase\Post\Show\PostShowPresenterInterface;
use Packages\UseCase\Post\Store\PostStorePresenterInterface;
use Packages\UseCase\Post\Update\PostUpdatePresenterInterface;
use Packages\UseCase\Profile\Edit\ProfileEditPresenterInterface;
use Packages\UseCase\Profile\Index\ProfileIndexPresenterInterface;
use Packages\UseCase\Profile\Show\ProfileShowPresenterInterface;
use Packages\UseCase\Profile\Update\ProfileUpdatePresenterInterface;

class PresenterServiceProvider extends ServiceProvider
{
    public $bindings = [
        PostCreatePresenterInterface::class => PostCreatePresenter::class,
        PostDeletePresenterInterface::class => PostDeletePresenter::class,
        PostEditPresenterInterface::class => PostEditPresenter::class,
        PostIndexPresenterInterface::class => PostIndexPresenter::class,
        PostSearchPresenterInterface::class => PostSearchPresenter::class,
        PostShowPresenterInterface::class => PostShowPresenter::class,
        PostStorePresenterInterface::class => PostStorePresenter::class,
        PostUpdatePresenterInterface::class => PostUpdatePresenter::class,

        ProfileEditPresenterInterface::class => ProfileEditPresenter::class,
        ProfileIndexPresenterInterface::class => ProfileIndexPresenter::class,
        ProfileShowPresenterInterface::class => ProfileShowPresenter::class,
        ProfileUpdatePresenterInterface::class => ProfileUpdatePresenter::class,
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
