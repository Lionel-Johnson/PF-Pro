<?php

namespace App\Http\Middleware;

use Closure;
use Core\Enums\UserRoleEnum;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnterpriseAdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->user()?->hasRole(UserRoleEnum::ENTERPRISE_ADMIN->value)) {
            abort(403);
        }

        return $next($request);
    }
}