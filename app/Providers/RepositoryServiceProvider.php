<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Domain\Domain\Post\PostRepositoryInterface;
use Packages\Domain\Domain\Profile\ProfileRepositoryInterface;
use Packages\Domain\Domain\User\UserRepositoryInterface;
use Packages\Infrastructure\Post\PostRepository;
use Packages\Infrastructure\Profile\ProfileRepository;
use Packages\Infrastructure\User\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        PostRepositoryInterface::class => PostRepository::class,
        ProfileRepositoryInterface::class => ProfileRepository::class,
        UserRepositoryInterface::class => UserRepository::class,
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
