<section id="portfolio" class="portfolio">

    <div class="container">

        <div class="section-header">

            <span class="section-badge">

                NOS RÉALISATIONS

            </span>

            <h2>

                Quelques projets récents

            </h2>

            <p>

                Découvrez quelques réalisations illustrant notre savoir-faire
                en développement, design et transformation numérique.

            </p>

        </div>

        <div class="portfolio-filter">

            <button class="active" data-filter="*">

                Tous

            </button>

            <button data-filter="web">

                Web

            </button>

            <button data-filter="mobile">

                Mobile

            </button>

            <button data-filter="design">

                Design

            </button>

            <button data-filter="video">

                Vidéo

            </button>

        </div>

        <div class="portfolio-grid">

            @php

            $projects=[

                [
                    'category'=>'web',
                    'title'=>'Plateforme Laravel',
                    'image'=>'portfolio/project1.webp',
                    'tech'=>'Laravel · PHP · MySQL'
                ],

                [
                    'category'=>'design',
                    'title'=>'Identité Visuelle',
                    'image'=>'portfolio/project2.webp',
                    'tech'=>'Illustrator · Photoshop'
                ],

                [
                    'category'=>'mobile',
                    'title'=>'Application Mobile',
                    'image'=>'portfolio/project3.webp',
                    'tech'=>'Flutter'
                ],

                [
                    'category'=>'video',
                    'title'=>'Spot Publicitaire',
                    'image'=>'portfolio/project4.webp',
                    'tech'=>'Premiere Pro'
                ],

                [
                    'category'=>'web',
                    'title'=>'Site Corporate',
                    'image'=>'portfolio/project5.webp',
                    'tech'=>'Laravel'
                ],

                [
                    'category'=>'design',
                    'title'=>'UX / UI',
                    'image'=>'portfolio/project6.webp',
                    'tech'=>'Figma'
                ]

            ];

            @endphp

            @foreach($projects as $project)

            <article class="portfolio-card"
                     data-category="{{ $project['category'] }}">

                <div class="portfolio-image">

                    <img
                        src="{{ asset('assets/img/'.$project['image']) }}"
                        alt="{{ $project['title'] }}">

                </div>

                <div class="portfolio-content">

                    <span>

                        {{ $project['tech'] }}

                    </span>

                    <h3>

                        {{ $project['title'] }}

                    </h3>

                    <a href="#">

                        Voir le projet →

                    </a>

                </div>

            </article>

            @endforeach

        </div>

    </div>

</section>