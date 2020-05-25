<?php

namespace App\Listeners;

use App\Events\PostAdded;
use App\Mail\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyUsersAboutPost
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(PostAdded $event)
    {
        Mail::to($event->post->user)->send(
            new PostCreated($event->post)
        );
    }
}
