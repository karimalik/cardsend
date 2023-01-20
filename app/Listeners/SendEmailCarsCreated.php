<?php

namespace App\Listeners;

use App\Events\CarsCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailCarsCreated
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
     * @param  \App\Events\CarsCreatedEvent  $event
     * @return void
     */
    public function handle(CarsCreatedEvent $event)
    {
        //
    }
}
