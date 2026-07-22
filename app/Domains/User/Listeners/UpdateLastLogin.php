<?php

namespace Domains\User\Listeners;

use Domains\User\Events\UserLoggedIn;

class UpdateLastLogin
{
    public function handle(UserLoggedIn $event): void
    {
        $event->user->update([

            'last_login_at' => now(),

            'last_login_ip' => $event->ip,

        ]);
    }
}