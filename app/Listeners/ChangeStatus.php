<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\ChangeStatuses;
use Illuminate\Support\Facades\Log;

class ChangeStatus
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
    public function handle(ChangeStatuses $event): void
    {
        Log::info("save endpoint hit");
       $event->testmonials->testmonialStatus =1;
       $event->testmonials->save();
    }
}
