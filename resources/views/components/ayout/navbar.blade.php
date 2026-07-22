<header
    id="navbar"
    class="navbar navbar-expand-xl fixed-top">

    <div class="container">

        <x-layout.logo/>

        <button
            class="navbar-toggler border-0 shadow-none"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div
            class="collapse navbar-collapse">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">

                    <a
                        href="{{ route('home') }}"
                        class="nav-link
                        {{ request()->routeIs('home') ? 'active' : '' }}">

                        Accueil

                    </a>

                </li>

                <li class="nav-item">

                    <a
                        href="#services"
                        class="nav-link">

                        Services

                    </a>

                </li>

                <li class="nav-item">

                    <a
                        href="#portfolio"
                        class="nav-link">

                        Réalisations

                    </a>

                </li>

                <li class="nav-item">

                    <a
                        href="#about"
                        class="nav-link">

                        À propos

                    </a>

                </li>

                <li class="nav-item">

                    <a
                        href="#contact"
                        class="nav-link">

                        Contact

                    </a>

                </li>

            </ul>

            <div class="d-flex align-items-center">

                <a
                    href="{{ route('login') }}"
                    class="btn btn-outline-primary me-2">

                    Connexion

                </a>

                <a
                    href="#contact"
                    class="btn btn-warning">

                    Demander un devis

                </a>

            </div>

        </div>

    </div>

</header>

<x-layout.mobile-menu/>