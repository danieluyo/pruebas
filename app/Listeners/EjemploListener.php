<?php

namespace App\Listeners;

use App\Events\EjemploEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EjemploListener
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
     * @param  EjemploEvent  $event
     * @return void
     */
    public function handle(EjemploEvent $event)
    {
        //
    }
}
