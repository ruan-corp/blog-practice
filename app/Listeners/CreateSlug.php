<?php

namespace App\Listeners;

use App\Events\CategorySaving;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Str;

class CreateSlug
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
