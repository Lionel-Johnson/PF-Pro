<?php

namespace Domains\User\Services;

use Domains\User\Repositories\UserRepository;
use Domains\User\DTO\RegisterUserData;
use Illuminate\Support\Facades\Hash;

class RegistrationService
{
    public function __construct(

        private UserRepository $users

    ){}

    public function create(RegisterUserData $dto)
    {
        return $this->users->create([

            'name'=>$dto->name,

            'email'=>$dto->email,

            'password'=>Hash::make($dto->password)

        ]);
    }
}