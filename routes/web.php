<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');
// il mio profilo
Route::get('/profilo', [ProfileController::class, 'page'])->name('profilo.page');
// modifica del profilo
Route::put('/profilo/{user}/aggiorna-avatar', [ProfileController::class, 'setAvatar'])->name('profile.setAvatar');
