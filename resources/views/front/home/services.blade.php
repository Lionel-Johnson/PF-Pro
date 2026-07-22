<section
    id="services"
    class="services">

    <div class="services-aurora">

        <span class="aurora aurora-1"></span>

        <span class="aurora aurora-2"></span>

    </div>

    <div class="container">

        <div class="section-header">

            <span class="section-badge">

                NOS SERVICES

            </span>

            <h2>

                Nos domaines d'expertise

            </h2>

            <p>

                Nous accompagnons les entreprises dans leur transformation digitale.

            </p>

        </div>

        <div class="services-grid">

            @forelse($services as $service)

                <article class="service-card">

                    @if($service->image)

                        <img

                            src="{{ asset('storage/'.$service->image) }}"

                            alt="{{ $service->title }}"

                            class="service-image">

                    @endif

                    <div class="service-content">

                        @if($service->icon)

                            <div class="service-icon">

                                <i class="fa-solid fa-{{ $service->icon }}"></i>

                            </div>

                        @endif

                        <h3>

                            {{ $service->title }}

                        </h3>

                        <p>

                            {{ $service->excerpt }}

                        </p>

                        <a
                            href="#contact"
                            class="service-button">

                            En savoir plus →

                        </a>

                    </div>

                </article>

            @empty

                <div class="alert alert-info">

                    Aucun service disponible.

                </div>

            @endforelse

        </div>

    </div>

</section>