<?php

namespace App\Listeners\Category;

use App\Events\CategorySaving;
use Illuminate\Support\Str;

class GenerateSlugListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CategorySaving $event): void
    {
        $event->category->slug = Str::slug($event->category->name);
    }
}
