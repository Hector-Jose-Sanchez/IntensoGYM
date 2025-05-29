<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tienda', function () {
    return view('tienda');
})->name('tienda');

Route::get('/promociones', function () {
    return view('promotion');
})->name('promociones');

// Ruta protegida para usuarios autenticados
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/inicio', function () {
        return view('home');
    })->name('dashboard');
});

// Rutas de autenticación (login, register, logout, etc.)
require __DIR__.'/auth.php';

