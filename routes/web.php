<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');
// 
Route::get('/user/all-users', [UserController::class, 'index'])->name('user.index');

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
// filtro per artista
Route::get('/track/all-tracks/{user}/autore', [TrackController::class, 'filterByUser'])->name('track.filterByUser');
// ricerca per genere
Route::get('/track/all-tracks/{genre}/genere', [TrackController::class, 'filterByGenre'])->name('track.filterByGenre');
// aggiungere, modificare e cancellare un genere
Route::post('/admin/dashboard/genres/store', [AdminController::class, 'store'])->name('admin.dashboard.genres.store');
Route::put('/admin/dashboard/genres/{genre}/update', [AdminController::class, 'update'])->name('admin.dashboard.genres.update');
Route::delete('/admin/dashboard/genres/{genre}/destroy', [AdminController::class, 'destroy'])->name('admin.dashboard.genres.destroy');

// dashboard admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/dashboard/users', [AdminController::class, 'users'])->name('admin.dashboardUsers');
Route::get('/admin/dashboard/traks', [AdminController::class, 'tracks'])->name('admin.dashboardTracks');
Route::get('/admin/dashboard/genres', [AdminController::class, 'genres'])->name('admin.dashboardGenres');

