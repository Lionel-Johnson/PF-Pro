<?php

namespace Domains\User\Repositories;

use App\Models\User;

class UserRepository
{
    public function create(array $data): User
    {
        return User::create($data);
    }

    public function findByEmail(string $email): ?User
    {
        return User::whereEmail($email)->first();
    }

    public function all()
    {
        return User::latest()->get();
    }
}