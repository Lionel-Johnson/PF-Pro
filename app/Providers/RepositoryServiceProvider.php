<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domains\User\Repositories\AuthRepositoryInterface;
use App\Infrastructure\Repositories\AuthRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            AuthRepositoryInterface::class,
            AuthRepository::class
        );
    }
}