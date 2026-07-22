<?php

use Domains\User\Events\UserLoggedIn;
use Domains\User\Events\UserRegistered;
use Domains\User\Events\UserLoggedOut;
Auth::login($user);
event(

    new UserRegistered($user)

);
event(

    new UserLoggedOut(

        auth()->user(),

        request()->ip()

    )

);

$this->service->logout();
$request->session()->regenerate();

event(

    new UserLoggedIn(

        auth()->user(),

        $request->ip(),

        $request->userAgent()

    )

);

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use Domains\User\Events\UserLoggedIn;
use Domains\User\Listeners\StoreLoginAudit;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [

        UserLoggedIn::class => [

            StoreLoginAudit::class,

        ],

    ];
}

UserLoggedIn::class => [

    StoreLoginAudit::class,

    SendLoginNotification::class,

],
protected $listen = [

    UserLoggedIn::class => [

        StoreLoginAudit::class,

        SendLoginNotification::class,

        UpdateLastLogin::class,

    ],

];