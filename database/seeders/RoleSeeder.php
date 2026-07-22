<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

use Core\Enums\RoleEnum;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        foreach(RoleEnum::cases() as $role){

            Role::firstOrCreate([

                'name'=>$role->value,

                'guard_name'=>'web'

            ]);

        }
    }
}