<?php

namespace App\Listeners\Post;

use App\Events\PostSaving;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HandlePostSavingListener
{
    /**
     * Handle the event.
     */
    public function handle(PostSaving $event)
    {
        $event->post->slug = Str::slug($event->post->title);
        $event->post->user_id = Auth::user()->id;
    }
}
