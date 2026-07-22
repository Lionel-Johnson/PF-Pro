<?php

namespace Database\Seeders;

use Core\Enums\PermissionEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        foreach (PermissionEnum::cases() as $permission) {

            Permission::firstOrCreate([
                'name' => $permission->value,
                'guard_name' => 'web'
            ]);

        }
    }
}