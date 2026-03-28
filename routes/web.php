<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('pages.secion_login');
})->name('login');

Route::get('/registro', function () {
    return view('pages.secion_create');
})->name('registro');

Route::get('/cuenta', function () {
    return view('pages.cuenta');
})->name('cuenta');

Route::get('/atencion', function () {
    return view('pages.atencion');
})->name('atencion');


