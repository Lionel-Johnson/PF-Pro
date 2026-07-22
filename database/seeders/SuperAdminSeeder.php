<?php

namespace Database\Seeders;

use App\Models\User;
use Core\Enums\UserRoleEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(

            [
                'email' => 'admin@lionelconcept.local'
            ],

            [
                'name' => 'Super Administrateur',
                'password' => Hash::make('Admin@123456')
            ]
        );

        $user->assignRole(UserRoleEnum::SUPER_ADMIN->value);
    }
}