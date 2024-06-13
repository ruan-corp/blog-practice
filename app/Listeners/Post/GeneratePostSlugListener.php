<?php

namespace App\Listeners\Post;

use App\Events\PostSaving;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GeneratePostSlugListener
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
    public function handle(PostSaving $event)
    {
        $event->post->slug = Str::slug($event->post->title);
        $event->post->user_id = Auth::user()->id;
        if ($event->post->published_at == 'on') {
            $event->post->published_at = now();
        }
    }
}
