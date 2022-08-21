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
        $this->app->singleton(
            \App\Repositories\Category\CategoryRepositoryInterface::class,
            \App\Repositories\Category\CategoryRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Customer\CustomerRepositoryInterface::class,
            \App\Repositories\Customer\CustomerRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Design\DesignRepositoryInterface::class,
            \App\Repositories\Design\DesignRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Image\ImageRepositoryInterface::class,
            \App\Repositories\Image\ImageRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Order\OrderRepositoryInterface::class,
            \App\Repositories\Order\OrderRepository::class
        );
        $this->app->singleton(
            \App\Repositories\OrderDetail\OrderDetailRepositoryInterface::class,
            \App\Repositories\OrderDetail\OrderDetailRepository::class
        );
        $this->app->singleton(
            \App\Repositories\PendingStyle\PendingStyleRepositoryInterface::class,
            \App\Repositories\PendingStyle\PendingStyleRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Post\PostRepositoryInterface::class,
            \App\Repositories\Post\PostRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Pot\PotRepositoryInterface::class,
            \App\Repositories\Pot\PotRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Species\SpeciesRepositoryInterface::class,
            \App\Repositories\Species\SpeciesRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Tag\TagRepositoryInterface::class,
            \App\Repositories\Tag\TagRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Tree\TreeRepositoryInterface::class,
            \App\Repositories\Tree\TreeRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Type\TypeRepositoryInterface::class,
            \App\Repositories\Type\TypeRepository::class
        );
        $this->app->singleton(
            \App\Repositories\User\UserRepositoryInterface::class,
            \App\Repositories\User\UserRepository::class
        );
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
}
