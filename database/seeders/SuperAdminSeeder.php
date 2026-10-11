<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $this->command?->warn('Use php artisan portfolio:admin to create an administrator with your own password.');
    }
}
