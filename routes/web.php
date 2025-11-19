<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\KeahlianController;
use App\Http\Controllers\PortofolioController;

// Public CV routes
Route::get('/', [BiodataController::class, 'index'])->name('home');
Route::get('/pendidikan/{biodataId}', [PendidikanController::class, 'index']);
Route::get('/pengalaman/{biodataId}', [PengalamanController::class, 'index']);
Route::get('/keahlian/{biodataId}', [KeahlianController::class, 'index']);

// Auth / dashboard routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
