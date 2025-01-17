<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\API\cocktailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [cocktailController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cocktail/{id}', [cocktailController::class, 'show'])->middleware(['auth', 'verified'])->name('cocktail/{id}');

Route::post('/coctail/{id}', [cocktailController::class, 'store'])->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
