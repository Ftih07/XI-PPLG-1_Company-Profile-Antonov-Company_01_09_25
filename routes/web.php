<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::view('/', 'index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


    Route::get('/', function () {
        return view('index');
    });

    Route::get('/', [HomeController::class, 'index'])->name('index');

require __DIR__.'/auth.php';
