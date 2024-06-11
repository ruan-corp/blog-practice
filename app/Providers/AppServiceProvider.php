<?php

namespace App\Providers;

use App\Events\CategorySaving;
use App\Events\PostSaving;
use App\Listeners\Category\GenerateSlugListener;
use App\Listeners\Post\GeneratePostSlugListener;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $listen = [
        CategorySaving::class => [
            GenerateSlugListener::class,
        ],
        PostSaving::class => [
            GeneratePostSlugListener::class
        ]
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
