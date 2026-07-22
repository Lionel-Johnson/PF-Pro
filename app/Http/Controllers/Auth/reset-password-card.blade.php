<div class="lc-card">

<form method="POST"
action="{{ route('password.update') }}">

@csrf

<input
type="hidden"
name="token"
value="{{ $token }}">

<input
type="email"
name="email"
placeholder="Email"
required>

<input
type="password"
name="password"
placeholder="Mot de passe"
required>

<input
type="password"
name="password_confirmation"
placeholder="Confirmation"
required>

<button>

Réinitialiser

</button>

</form>

</div>