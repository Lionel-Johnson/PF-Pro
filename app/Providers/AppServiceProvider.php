<?php

namespace App\Providers;

use App\EnterpriseRepository;
use App\EnterpriseRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use App\Repositories\Eloquent\ServiceRepository;



class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            EnterpriseRepositoryInterface::class,
            EnterpriseRepository::class
        );
    }

    public function boot(): void
    {
        Gate::before(function ($user, $ability) {

            return $user->hasRole('Super Admin')
                ? true
                : null;

        });
    }
}

