<?php

namespace App\Listeners;

use App\Events\ThreadCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ThreadCreated  $event
     * @return void
     */
    public function handle(ThreadCreated $event)
    {
        dd($event->thread['name'] . 'was published to the form ');
    }
}
