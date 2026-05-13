<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;


// Ruta para la página de Inicio (Novedades)
Route::get('/', function () {
    return view('pages.welcome'); 
})->name('inicio');

// Ruta para la página de Catálogo
Route::get('/magic', function () {
    return view('pages.magic'); 
})->name('magic');

Route::get('/yugioh', function () {
    return view('pages.yugioh'); 
})->name('yugioh');

Route::get('/mitos', function () {
    return view('pages.mitos'); 
})->name('mitos');

Route::get('/carta', function () {
    return view('pages.carta'); 
})->name('carta');

Route::get('/catalogo', function () {
    return view('pages.catalogo'); 
})->name('catalogo');

Route::get('/carrito', function () {
    return view('pages.carrito'); 
})->name('carrito');

Route::get('/carrito', function () {
    return view('pages.carrito');
})->name('carrito');

Route::get('/pago', function () {
    return view('pages.pago');
})->name('pago');

Route::get('/buscar', function () {
    return view('pages.buscar');
})->name('buscar');

Route::get('/cuenta', function () {
    return view('pages.cuenta');
})->name('cuenta');

Route::get('/atencion', function () {
    return view('pages.atencion');
})->name('atencion');

Route::get('/faq', function () {
    return view('pages.FAQ');
})->name('faq');

Route::middleware(['auth', 'can:admin-only'])->group(function () {
    // Ruta para VER el formulario
    Route::get('/stock/subir', [StockController::class, 'create'])->name('stock.create');
    
    // Ruta para RECIBIR los datos (esta es la que te falta)
    Route::post('/stock/guardar', [StockController::class, 'store'])->name('stock.store');
});

Route::get('/cartas', [CartaController::class, 'index'])->name('cartas.index');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/cuenta', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

});







