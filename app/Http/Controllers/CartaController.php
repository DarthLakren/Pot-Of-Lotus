<?php

namespace App\Http\Controllers;

use App\Models\Carta;

class CartaController extends Controller
{
    public function index()
    {
        $cartas = Carta::all();
        return view('cartas.index', compact('cartas'));
    }
}