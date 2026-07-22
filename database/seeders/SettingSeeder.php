<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::create([

            'site_name' => 'Lionel Concept',

            'tagline' => 'Solutions Numériques',

            'phone' => '+24174129812',

            'email' => 'contact@lionelconcept.com',

            'address' => 'Port-Gentil',

            'city' => 'Port-Gentil',

            'country' => 'Gabon',

            'primary_color' => '#071B38',

            'secondary_color' => '#D4AF37',

            'accent_color' => '#4F46E5',

            'copyright' => 'Lionel Concept'

        ]);
    }
}