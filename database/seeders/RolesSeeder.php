<?php

namespace Database\Seeders;

use Core\Enums\PermissionEnum;
use Core\Enums\UserRoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = Role::firstOrCreate([
            'name' => UserRoleEnum::SUPER_ADMIN->value,
            'guard_name' => 'web'
        ]);

        $enterpriseAdmin = Role::firstOrCreate([
            'name' => UserRoleEnum::ENTERPRISE_ADMIN->value,
            'guard_name' => 'web'
        ]);

        $manager = Role::firstOrCreate([
            'name' => UserRoleEnum::MANAGER->value,
            'guard_name' => 'web'
        ]);

        $employee = Role::firstOrCreate([
            'name' => UserRoleEnum::EMPLOYEE->value,
            'guard_name' => 'web'
        ]);

        $client = Role::firstOrCreate([
            'name' => UserRoleEnum::CLIENT->value,
            'guard_name' => 'web'
        ]);

        $superAdmin->syncPermissions(PermissionEnum::values());
    }
}