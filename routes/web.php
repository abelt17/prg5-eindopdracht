<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TacticsController;
use App\Http\Controllers\WelcomeController;
use \App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::resource('/', WelcomeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('tactics', TacticsController::class);

Route::put('/tactics/{tactic}', [TacticsController::class, 'update'])->name('tactics.update');

Route::get('/my-tactics', [TacticsController::class, 'myTactics'])->middleware('auth')->name('tactics.my');

Route::post('/favorites/{tactic}', [TacticsController::class, 'storeFavorites'])->middleware('auth')->name('favorites.store');

Route::get('/my-favorites', [TacticsController::class, 'myFavorites'])->middleware('auth')->name('favorites.my');

Route::get('/see-users', [AdminController::class, 'seeUsers'])->middleware('auth')->name('users.see');

Route::post('/see-users/{user}', [AdminController::class, 'toggleUser'])->middleware('auth')->name('users.toggle');

require __DIR__.'/auth.php';
