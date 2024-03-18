<?php 

namespace Kubla61\WelcomeEmail;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Kubla61\WelcomeEmail\Events\UserRegistered;
use Kubla61\WelcomeEmail\Listeners\SendWelcomeEmail;

class WelcomeEmailServiceProvider extends ServiceProvider
{
    protected $listen = [
        UserRegistered::class => [
            SendWelcomeEmail::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}