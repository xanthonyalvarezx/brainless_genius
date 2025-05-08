<?php

namespace App\Listeners;

use App\Events\authLog;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class authLogListner
{
    /**
     * Create the event listener.
     */
    public function __construct() {}

    /**
     * Handle the event.
     */
    public function handle(authLog $event): void
    {
        $currentDate = date(now());
        date_default_timezone_set("America/New_York");
        $currentTime = date("h:i:sa");


        if ($event->name && $event->action == 'login' || $event->name && $event->action == 'logout') {
            Log::channel('auth')->info("{$event->name} performed a {$event->action} on {$currentDate} at {$currentTime}");
        } else {
            Log::channel('auth')->info("{$event->email} performed a {$event->action} on {$currentDate} at {$currentTime}");
        }
    }
}
