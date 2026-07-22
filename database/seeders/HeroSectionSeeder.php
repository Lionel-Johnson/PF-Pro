<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Seeder;


class HeroSectionSeeder extends Seeder
{

$this->call([
    SettingSeeder::class,
    HeroSectionSeeder::class,
]);
    public function run(): void
    {
        HeroSection::create([

            'title' => 'Construisons votre avenir numérique',

            'subtitle' => 'Innovation • Performance • Sécurité',

            'description' => 'Lionel Concept accompagne les entreprises, institutions et particuliers dans leur transformation numérique grâce à des solutions sur mesure.',

            'primary_button_text' => 'Découvrir nos services',

            'primary_button_url' => '#services',

            'secondary_button_text' => 'Nous contacter',

            'secondary_button_url' => '#contact',

            'is_active' => true,

        ]);
    }
}

