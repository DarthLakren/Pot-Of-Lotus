<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página de Inicio (Novedades)
Route::get('/', function () {
    return view('pages.welcome'); // nombre de tu archivo novedades.blade.php
})->name('inicio');

// Ruta para la página de Catálogo
Route::get('/magic', function () {
    return view('pages.magic'); // nombre de tu archivo catalogo.blade.php
})->name('magic');

Route::get('/yugioh', function () {
    return view('pages.yugioh'); // nombre de tu archivo yugioh.blade.php
})->name('yugioh');

Route::get('/mitos', function () {
    return view('pages.mitos'); // nombre de tu archivo pokemon.blade.php
})->name('mitos');

Route::get('/carta', function () {
    return view('pages.carta'); // nombre de tu archivo carta.blade.php
})->name('carta');

Route::get('/catalogo', function () {
    return view('pages.catalogo'); // nombre de tu archivo catalogo.blade.php
})->name('catalogo');

Route::get('/carrito', function () {
    return view('pages.carrito'); // nombre de tu archivo carrito.blade.php
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

Route::get('/login', function () {
    return view('pages.secion_login'); // Nombre exacto que pediste
})->name('login');

Route::get('/registro', function () {
    return view('pages.secion_create'); // Nombre actualizado
})->name('registro');
