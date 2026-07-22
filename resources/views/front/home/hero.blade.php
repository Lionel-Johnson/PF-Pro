<section id="hero" class="hero">

    <!-- ===========================
        Background Video
    ============================ -->

    <div class="hero-video">

        <video
            id="hero-video"
            autoplay
            muted
            loop
            playsinline
            preload="auto"
            poster="{{ asset('assets/videos/hero/poster.webp') }}">

            <source
                src="{{ asset('assets/videos/hero/hero.webm') }}"
                type="video/webm">

            <source
                src="{{ asset('assets/videos/hero/hero.mp4') }}"
                type="video/mp4">

        </video>

    </div>

    <!-- Overlay -->

    <div class="hero-overlay"></div>

    <!-- Aurora -->

    <div class="hero-aurora">

        <span class="aurora aurora-1"></span>

        <span class="aurora aurora-2"></span>

        <span class="aurora aurora-3"></span>

    </div>

    <div class="container hero-wrapper">

        <!-- ===========================
            TOP BAR
        ============================ -->

        <div class="hero-topbar glass">

            <div class="hero-location">

                <span class="status-dot"></span>

                <span id="visitor-location">

                    Fuseau horaire détecté

                </span>

            </div>

            <div class="hero-clock">

                <span id="current-time">

                    00:00:00

                </span>

                <span id="current-date"></span>

            </div>

        </div>

        <!-- ===========================
            HERO CONTENT
        ============================ -->

        <div class="hero-content">

            <div class="hero-card glass">

                <span class="hero-badge">

                    Lionel Concept

                </span>

                <h1>

                    Votre partenaire en

                    <span>

                        Transformation Numérique

                    </span>

                </h1>

                <p>

                    Nous concevons des plateformes modernes,
                    des applications web,
                    des solutions cloud
                    et des expériences digitales
                    pensées pour accélérer votre croissance.

                </p>

                <div class="typing-box">

                    <span class="typing-label">

                        Expertise :

                    </span>

                    <span id="typed-text"></span>

                </div>

                <div class="hero-buttons">

                    <a
                        href="#services"
                        class="btn btn-primary">

                        Découvrir nos services

                    </a>

                    <a
                        href="#contact"
                        class="btn btn-outline">

                        Demander un devis

                    </a>

                </div>

            </div>

        </div>

        <!-- ===========================
            Scroll
        ============================ -->

        <a
            href="#services"
            class="scroll-indicator">

            <span></span>

        </a>

    </div>

</section>