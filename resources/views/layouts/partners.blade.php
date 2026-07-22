<section id="partners" class="partners">

    <div class="container">

        <div class="section-title fade-up">

            <span>PARTENAIRES</span>

            <h2>Ils nous accompagnent</h2>

            <p>

                Des entreprises qui nous font confiance pour leurs projets numériques.

            </p>

        </div>

        <div class="partners-slider">

            <div class="partners-track">

                @for($i=1;$i<=8;$i++)

                    <div class="partner-item">

                        <img src="{{ asset('assets/img/partners/logo'.$i.'.png') }}" alt="">

                    </div>

                @endfor

                @for($i=1;$i<=8;$i++)

                    <div class="partner-item">

                        <img src="{{ asset('assets/img/partners/logo'.$i.'.png') }}" alt="">

                    </div>

                @endfor

            </div>

        </div>

    </div>

</section>
