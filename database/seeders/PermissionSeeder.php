<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

use Core\Enums\PermissionEnum;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        foreach(PermissionEnum::cases() as $permission){

            Permission::firstOrCreate([

                'name'=>$permission->value,

                'guard_name'=>'web'

            ]);

        }
    }
}