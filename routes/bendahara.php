<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Bendahara\BendaharaController;
use App\Http\Controllers\Bendahara\DashboardController;

Route::middleware(['auth', 'bendahara'])->group(function () {
    Route::get('/bendahara/dashboard', [BendaharaController::class, 'index'])->name('bendahara.dashboard');
});

Route::prefix('bendahara')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('bendahara.dashboard');
});

Route::prefix('bendahara')->middleware(['auth'])->group(function () {
    Route::resource('dompet', App\Http\Controllers\Bendahara\DompetKasController::class)
        ->names('bendahara.dompet');
});
