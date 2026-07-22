<?php

namespace Domains\User\Listeners;

use App\Models\LoginAudit;
use Domains\User\Events\UserLoggedIn;

class StoreLoginAudit
{
    public function handle(UserLoggedIn $event): void
    {
        LoginAudit::create([

            'user_id'=>$event->user->id,

            'ip_address'=>$event->ip,

            'user_agent'=>$event->userAgent,

            'success'=>true,

            'logged_at'=>now()

        ]);
    }
}