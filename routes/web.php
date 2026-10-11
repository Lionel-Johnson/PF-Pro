<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\EnterpriseController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:5,1')->name('contact.store');

Route::middleware(['auth', 'active', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});
Route::middleware(['auth', 'active'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'active', 'verified', 'role:Super Admin'])
    ->prefix('administration')->name('admin.')->group(function () {
        Route::view('/', 'admin.dashboard')->name('dashboard');
        Route::resource('enterprises', EnterpriseController::class);
        Route::resource('services', ServiceController::class)->except('show');
        Route::get('contacts', [ContactMessageController::class, 'index'])->name('contacts.index');
        Route::get('contacts/{contact}', [ContactMessageController::class, 'show'])->name('contacts.show');
        Route::post('contacts/{contact}/retry', [ContactMessageController::class, 'retry'])
            ->middleware('throttle:5,1')->name('contacts.retry');
    });

require __DIR__.'/auth.php';
