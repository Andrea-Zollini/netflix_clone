<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Guest/Index');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profiles', [UserProfileController::class, 'index'])->name('profiles.index');
    Route::get('/profiles/create', [UserProfileController::class, 'create'])->name('profiles.create');
    Route::post('/profiles', [UserProfileController::class, 'store'])->name('profiles.store');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
