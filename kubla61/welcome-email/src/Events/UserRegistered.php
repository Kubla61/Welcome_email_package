<?php 

namespace Kubla61\WelcomeEmail\Events;

class UserRegistered
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}