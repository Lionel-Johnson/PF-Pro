<section id="partners" class="partners">

    <div class="container">

        <div class="section-header">

            <span class="section-badge">

                NOS PARTENAIRES

            </span>

            <h2>

                Ils nous font confiance

            </h2>

            <p>

                Nous collaborons avec des entreprises, institutions
                et organisations partageant notre vision de
                l'innovation numérique.

            </p>

        </div>

        @php

        $partners=[

            'partner1.webp',
            'partner2.webp',
            'partner3.webp',
            'partner4.webp',
            'partner5.webp',
            'partner6.webp'

        ];

        @endphp

        <div class="partners-slider">

            <div class="partners-track">

                @foreach($partners as $logo)

                    <div class="partner-item">

                        <img
                        src="{{ asset('assets/front/img/partners/'.$logo) }}"
                        alt="Partenaire">

                    </div>

                @endforeach

                @foreach($partners as $logo)

                    <div class="partner-item">

                        <img
                        src="{{ asset('assets/front/img/partners/'.$logo) }}"
                        alt="Partenaire">

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>
