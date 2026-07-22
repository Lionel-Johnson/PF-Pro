<?php

namespace Domains\User\Services;

use App\Models\User;
use Illuminate\Support\Str;

class TwoFactorService
{
    public function generateSecret(User $user): string
    {
        $secret = Str::upper(Str::random(32));

        $user->update([

            'two_factor_secret' => $secret,

            'two_factor_enabled' => true,

        ]);

        return $secret;
    }

    public function disable(User $user): void
    {
        $user->update([

            'two_factor_secret' => null,

            'two_factor_enabled' => false,

        ]);
    }
}