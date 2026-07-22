<div class="lc-card">

    <h2>

        Connexion

    </h2>

    <form method="POST"
          action="{{ route('login') }}">

        @csrf

        <div>

            <label>Email</label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required>

            @error('email')

                <small>

                    {{ $message }}

                </small>

            @enderror

        </div>

        <div>

            <label>Mot de passe</label>

            <input
                type="password"
                name="password"
                required>

        </div>

        <div>

            <label>

                <input
                    type="checkbox"
                    name="remember">

                Se souvenir de moi

            </label>

        </div>

        <button>

            Se connecter

        </button>

    </form>

</div>