<div class="lc-card">

<h2>Mot de passe oublié</h2>

<form method="POST"
      action="{{ route('password.email') }}">

@csrf

<input
type="email"
name="email"
placeholder="Votre email"
required>

<button>

Envoyer le lien

</button>

</form>

</div>