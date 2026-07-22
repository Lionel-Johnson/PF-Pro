<header class="navbar navbar-expand-lg bg-white border-bottom shadow-sm px-4">

    <div class="container-fluid">

        <h5 class="mb-0">
            Administration
        </h5>

        <div class="ms-auto d-flex align-items-center gap-3">

            @auth
                <span class="text-muted">
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

</header>