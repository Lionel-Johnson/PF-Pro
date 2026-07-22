<?php

namespace Domains\User\Listeners;

use Domains\User\Events\UserLoggedIn;
use App\Notifications\NewLoginNotification;

class SendLoginNotification
{
    public function handle(UserLoggedIn $event): void
    {
        $event->user->notify(

            new NewLoginNotification()

        );
    }
}