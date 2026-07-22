<header id="navbar" class="navbar">

    <div class="container navbar-container">

        <a href="{{ route('home') }}" class="navbar-logo">

            <img
                src="{{ asset('assets/img/logo.png') }}"
                alt="Lionel Concept">

            <span>

                Lionel Concept

            </span>

        </a>

        <nav class="navbar-menu">

            <a href="#hero">Accueil</a>

            <a href="#services">Services</a>

            <a href="#about">À propos</a>

            <a href="#portfolio">Réalisations</a>

            <a href="#testimonials">Avis</a>

            <a href="#contact">Contact</a>

        </nav>

        <div class="navbar-actions">

            <a
                href="{{ route('login') }}"
                class="btn-login">

                Connexion

            </a>

            <button
                id="menu-toggle"
                class="menu-toggle">

                ☰

            </button>

        </div>

    </div>

</header>