<?php

namespace App\Listeners\Post;

use App\Events\PostSaving;
use Illuminate\Support\Str;

class GeneratePostSlugListener
{
    /**
     * Handle the event.
     */
    public function handle(PostSaving $event)
    {
        $event->post->slug = Str::slug($event->post->title);
    }
}
