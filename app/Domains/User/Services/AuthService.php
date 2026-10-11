<?php

namespace Domains\User\Services;

use App\Models\User;
use Domains\User\DTO\LoginDTO;
use Domains\User\DTO\RegisterDTO;
use Domains\User\Repositories\AuthRepositoryInterface;




class AuthService
{
    public function __construct(
        private readonly AuthRepositoryInterface $repository
    ) {}

    public function login(LoginDTO $dto): bool
    {
        return $this->repository->login($dto);
    }

    public function register(RegisterDTO $dto): User
    {
        return $this->repository->register($dto);
    }

    public function logout(): void
    {
        $this->repository->logout();
    }
}