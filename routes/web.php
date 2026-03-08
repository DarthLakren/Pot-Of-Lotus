<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página de Inicio (Novedades)
Route::get('/', function () {
    return view('welcome'); // nombre de tu archivo novedades.blade.php
})->name('inicio');

// Ruta para la página de Catálogo
Route::get('/magic', function () {
    return view('magic'); // nombre de tu archivo catalogo.blade.php
})->name('magic');

Route::get('/yugioh', function () {
    return view('yugioh'); // nombre de tu archivo yugioh.blade.php
})->name('yugioh');

Route::get('/pokemon', function () {
    return view('pokemon'); // nombre de tu archivo pokemon.blade.php
})->name('pokemon');

Route::get('/carta', function () {
    return view('carta'); // nombre de tu archivo carta.blade.php
})->name('carta');

Route::get('/catalogo', function () {
    return view('catalogo'); // nombre de tu archivo catalogo.blade.php
})->name('catalogo');

Route::get('/carrito', function () {
    return view('carrito'); // nombre de tu archivo carrito.blade.php
})->name('carrito');

Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');

Route::get('/pago', function () {
    return view('pago');
})->name('pago');

Route::get('/login', function () {
    return view('secion_login'); // Nombre exacto que pediste
})->name('login');

Route::get('/registro', function () {
    return view('secion_create'); // Nombre actualizado
})->name('registro');
