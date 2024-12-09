<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');
// il mio profilo
Route::get('/profilo', [ProfileController::class, 'page'])->name('profilo.page');
// modifica del profilo
Route::put('/profilo/{user}/aggiorna-avatar', [ProfileController::class, 'setAvatar'])->name('profile.setAvatar');
Route::get('/profilo/{user}/aggiorna-dati', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profilo/{user}/aggiorna-dati', [ProfileController::class, 'update'])->name('profile.update');

// track
Route::get('/track/create', [TrackController::class, 'create'])->name('track.create');
Route::post('/track/create', [TrackController::class, 'store'])->name('track.store');
Route::get('/track/all-tracks', [TrackController::class, 'index'])->name('track.index');
// ricerca per artista
Route::get('/track/all-tracks/{user}/autore', [TrackController::class, 'filterByUser'])->name('track.filterByUser');

