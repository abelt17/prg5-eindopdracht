<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TacticsController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/home', function () {
   return view('home');
});

Route::resource('tactics', TacticsController::class);

Route::put('/tactics/{tactic}', [TacticsController::class, 'update'])->name('tactics.update');

Route::get('/my-tactics', [TacticsController::class, 'myTactics'])->middleware('auth')->name('tactics.my');

require __DIR__.'/auth.php';
