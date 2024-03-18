<?php

namespace Kubla61\WelcomeEmail\Listeners;

use Kubla61\WelcomeEmail\Jobs\SendWelcomeEmailJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Bus;

class SendWelcomeEmail implements ShouldQueue
{
    public function handle($event)
    {
        $job = new SendWelcomeEmailJob($event->user);
        Bus::dispatch($job);
    }
}