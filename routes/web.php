<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;
use App\Http\Middleware\IsAdmin;

// Ruta pública principal (inicio con carrusel)
Route::get('/', [PromotionController::class, 'index'])->name('home');

// Ruta de tienda
Route::get('/tienda', function () {
    return view('tienda');
})->name('tienda');

// Ruta solo para administradores (formulario para subir promoción)
    Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/promotions', [PromotionController::class, 'create'])->name('promotions');
    Route::post('/promotions', [PromotionController::class, 'store'])->name('promotions.store');
});

// Rutas de autenticación
require __DIR__.'/auth.php';
