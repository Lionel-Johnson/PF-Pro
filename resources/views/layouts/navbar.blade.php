<nav class="lc-navbar">

    <div class="container">

        <a href="{{ url('/') }}" class="logo">

            LIONEL CONCEPT

        </a>

        <ul>

            <li>

                <a href="{{ url('/') }}">
                    Accueil
                </a>

            </li>

            @guest

                <li>

                    <a href="{{ route('login') }}">
                        Connexion
                    </a>

                </li>

                <li>

                    <a href="{{ route('register') }}">
                        Inscription
                    </a>

                </li>

            @endguest

            @auth

                <li>

                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>

                </li>

                <li>

                    <form method="POST"
                          action="{{ route('logout') }}">

                        @csrf

                        <button>

                            Déconnexion

                        </button>

                    </form>

                </li>

            @endauth

        </ul>

    </div>

</nav>