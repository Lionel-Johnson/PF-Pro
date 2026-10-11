<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('portfolio:admin', function () {
    $name = $this->ask('Nom');
    $email = $this->ask('Adresse e-mail');
    $password = $this->secret('Mot de passe (12 caractères minimum)');
    $validator = validator(compact('name', 'email', 'password'), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:12',
    ]);
    if ($validator->fails()) {
        foreach ($validator->errors()->all() as $error) $this->error($error);
        return 1;
    }
    $role = \Spatie\Permission\Models\Role::firstOrCreate(['name' => 'Super Admin', 'guard_name' => 'web']);
    $user = \App\Models\User::create(compact('name', 'email', 'password') + ['is_active' => true]);
    $user->forceFill(['email_verified_at' => now()])->save();
    $user->assignRole($role);
    $this->info('Administrateur créé.');
})->purpose('Créer un administrateur sans mot de passe partagé');
