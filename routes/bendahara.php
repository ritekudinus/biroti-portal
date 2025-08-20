<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Bendahara\BendaharaController;

Route::middleware(['auth', 'bendahara'])->group(function () {
    Route::get('/bendahara/dashboard', [BendaharaController::class, 'index'])->name('bendahara.dashboard');
});
