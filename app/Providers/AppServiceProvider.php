<?php

namespace App\Providers;

use App\Events\CategorySaving;
use App\Listeners\Category\GenerateSlugListener;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $listen = [
        CategorySaving::class => [
            GenerateSlugListener::class,
        ],
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
