<section id="testimonials" class="testimonials">

    <div class="container">

        <div class="section-header">

            <span class="section-badge">

                TÉMOIGNAGES

            </span>

            <h2>

                Ils nous ont fait confiance

            </h2>

            <p>

                Quelques retours de nos clients après la réalisation de leurs projets.

            </p>

        </div>

        @php

        $testimonials = [

            [
                'photo' => 'assets/front/img/testimonials/client1.webp',
                'name'  => 'Jean M.',
                'role'  => 'Chef d\'entreprise',
                'text'  => 'Une équipe professionnelle, réactive et à l’écoute. Notre plateforme a été livrée dans les délais avec une qualité remarquable.'
            ],

            [
                'photo' => 'assets/front/img/testimonials/client2.webp',
                'name'  => 'Marie N.',
                'role'  => 'Responsable Communication',
                'text'  => 'Lionel Concept a transformé notre image de marque avec un design moderne et une identité visuelle forte.'
            ],

            [
                'photo' => 'assets/front/img/testimonials/client3.webp',
                'name'  => 'Patrick B.',
                'role'  => 'Directeur Informatique',
                'text'  => 'Très satisfait du professionnalisme et des solutions proposées. Je recommande vivement.'
            ]

        ];

        @endphp

        <div class="testimonial-slider">

            @foreach($testimonials as $testimonial)

            <article class="testimonial-card">

                <img
                    src="{{ asset($testimonial['photo']) }}"
                    alt="{{ $testimonial['name'] }}">

                <div class="stars">

                    ★★★★★

                </div>

                <p>

                    "{{ $testimonial['text'] }}"

                </p>

                <h3>

                    {{ $testimonial['name'] }}

                </h3>

                <span>

                    {{ $testimonial['role'] }}

                </span>

            </article>

            @endforeach

        </div>

    </div>

</section>