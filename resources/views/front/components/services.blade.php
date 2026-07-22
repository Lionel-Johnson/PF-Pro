<section
    id="services"
    class="services aurora">

    <div class="services-overlay"></div>

    <div class="container">

        <div class="section-title fade-up">

            <span class="badge badge-primary">

                Nos Services

            </span>

            <h2>

                Des solutions numériques
                pensées pour votre réussite

            </h2>

            <p>

                Lionel Concept accompagne les entreprises,
                les administrations et les particuliers
                dans leur transformation numérique.

            </p>

        </div>

        <div class="services-grid">

            @foreach($services as $service)

                <article class="service-card glass">

                    <div class="service-icon">

                        {{ $service['icon'] }}

                    </div>

                    <h3>

                        {{ $service['title'] }}

                    </h3>

                    <p>

                        {{ $service['description'] }}

                    </p>

                    <a
                        href="#contact"
                        class="service-link">

                        En savoir plus →

                    </a>

                </article>

            @endforeach

        </div>

    </div>

</section>