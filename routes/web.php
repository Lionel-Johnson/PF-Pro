<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\EnterpriseController;
use App\Http\Controllers\Profile\SecurityController;
use App\Http\Controllers\Admin\ServiceController;

/*
|--------------------------------------------------------------------------
| Page d'accueil publique
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return redirect()->route('dashboard');
})->name('login');

/*
|--------------------------------------------------------------------------
| Dashboard utilisateur
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth',
    'active',
    'verified.enterprise',
])->group(function () {

    Route::view('/dashboard', 'dashboard')
        ->name('dashboard');

});

/*
|--------------------------------------------------------------------------
| Administration
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth',
    'role:Super Admin',
])
->prefix('administration')
->name('admin.')
->group(function () {

    Route::view('/', 'admin.dashboard')
        ->name('dashboard');

    Route::resource('enterprises', EnterpriseController::class);

});

