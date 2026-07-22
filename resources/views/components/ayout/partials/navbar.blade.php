<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm">

    <div class="container-fluid">

        <h4 class="mb-0">
            Administration
        </h4>

        <div class="ms-auto d-flex align-items-center gap-3">

            @auth

                <span>
                    {{ auth()->user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button class="btn btn-outline-danger btn-sm">

                        Déconnexion

                    </button>

                </form>

            @endauth

        </div>

    </div>

</nav>