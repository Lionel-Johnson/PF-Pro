<?php


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Domains\User\DTO\LoginDTO;
use Domains\User\DTO\RegisterDTO;
use Domains\User\Repositories\AuthRepositoryInterface;


namespace Infrastructure\Repositories;


class AuthRepository implements AuthRepositoryInterface
{
    public function login(LoginDTO $dto): bool
    {
        return Auth::attempt([
            'email' => $dto->email,
            'password' => $dto->password
        ], $dto->remember);
    }

    public function register(RegisterDTO $dto): User
    {
        return User::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => Hash::make($dto->password),
        ]);
    }

    public function logout(): void
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();
    }
}