<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [

            [

                'title' => 'Développement Web',

                'icon' => 'code',

                'excerpt' => 'Sites web professionnels.',

                'description' => 'Développement de sites vitrines, e-commerce et applications web modernes.',

                'position' => 1,

                'featured' => true

            ],

            [

                'title' => 'Réseaux & Cybersécurité',

                'icon' => 'shield',

                'excerpt' => 'Sécurisation des infrastructures.',

                'description' => 'Installation, configuration, audit et sécurisation des réseaux informatiques.',

                'position' => 2,

                'featured' => true

            ],

            [

                'title' => 'Graphisme & Branding',

                'icon' => 'palette',

                'excerpt' => 'Identité visuelle.',

                'description' => 'Création de logos, chartes graphiques et supports de communication.',

                'position' => 3

            ],

            [

                'title' => 'Production Audiovisuelle',

                'icon' => 'video',

                'excerpt' => 'Photos et vidéos.',

                'description' => 'Captation, montage vidéo, motion design et publicité.',

                'position' => 4

            ],

            [

                'title' => 'Formation',

                'icon' => 'graduation-cap',

                'excerpt' => 'Montée en compétences.',

                'description' => 'Formations en informatique, bureautique et numérique.',

                'position' => 5

            ],

            [

                'title' => 'Conseil Numérique',

                'icon' => 'briefcase',

                'excerpt' => 'Transformation digitale.',

                'description' => 'Accompagnement des entreprises dans leurs projets numériques.',

                'position' => 6

            ]

        ];

        foreach ($services as $service) {

            Service::create($service);

        }
    }
}