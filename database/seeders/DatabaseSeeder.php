<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

$this->call([

    SettingSeeder::class,

    HeroSectionSeeder::class,

    ServiceSeeder::class,

]);


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([

            PermissionsSeeder::class,

            RolesSeeder::class,

            SuperAdminSeeder::class,

        ]);
    }
}

