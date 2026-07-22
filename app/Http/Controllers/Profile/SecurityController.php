<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Domains\User\Services\TwoFactorService;

class SecurityController extends Controller
{
    public function enable(TwoFactorService $service)
    {
        $secret = $service->generateSecret(

            auth()->user()

        );

        return back()->with(

            'secret',

            $secret

        );
    }

    public function disable(TwoFactorService $service)
    {
        $service->disable(

            auth()->user()

        );

        return back()->with(

            'success',

            'Double authentification désactivée.'

        );
    }
}