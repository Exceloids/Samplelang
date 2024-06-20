<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', [App\Http\Controllers\AboutMeController::class, 'index'])->name('about.me');
Route::get('/skills', [App\Http\Controllers\Skills::class, 'index'])->name('skills');