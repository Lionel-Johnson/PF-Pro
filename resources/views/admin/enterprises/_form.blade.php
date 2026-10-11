<label for="name">Nom</label><input id="name" name="name" type="text" value="{{ old('name', $enterprise->name ?? '') }}" required>
<label for="legal_name">Raison sociale</label><input id="legal_name" name="legal_name" type="text" value="{{ old('legal_name', $enterprise->legal_name ?? '') }}" >
<label for="email">E-mail</label><input id="email" name="email" type="email" value="{{ old('email', $enterprise->email ?? '') }}" >
<label for="phone">Téléphone</label><input id="phone" name="phone" type="text" value="{{ old('phone', $enterprise->phone ?? '') }}" >
<label for="website">Site internet</label><input id="website" name="website" type="url" value="{{ old('website', $enterprise->website ?? '') }}" >
<label for="country">Pays</label><input id="country" name="country" type="text" value="{{ old('country', $enterprise->country ?? 'Gabon') }}" >
<label for="city">Ville</label><input id="city" name="city" type="text" value="{{ old('city', $enterprise->city ?? '') }}" >
<label for="address">Adresse</label><textarea id="address" name="address">{{ old('address', $enterprise->address ?? '') }}</textarea>
<label for="nif">NIF</label><input id="nif" name="nif" type="text" value="{{ old('nif', $enterprise->nif ?? '') }}" >
<label for="rccm">RCCM</label><input id="rccm" name="rccm" type="text" value="{{ old('rccm', $enterprise->rccm ?? '') }}" >
<input type="hidden" name="is_active" value="0"><label><input type="checkbox" name="is_active" value="1" @checked(old('is_active', $enterprise->is_active ?? true))> Actif</label><button class="btn primary" type="submit">Enregistrer</button>