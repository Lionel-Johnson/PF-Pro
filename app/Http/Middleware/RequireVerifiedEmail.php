<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequireVerifiedEmail
{
    public function handle(Request $request, Closure $next): Response
    {
        if (
            auth()->check() &&
            ! auth()->user()->hasVerifiedEmail()
        ) {

            return redirect()
                ->route('verification.notice');

        }

        return $next($request);
    }
}