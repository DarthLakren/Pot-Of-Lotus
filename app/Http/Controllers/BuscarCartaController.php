<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use Illuminate\Http\Request;

class BuscarCartaController extends Controller
{
    public function index()
    {
        $cartas = Carta::all();
        return view('cartas.buscar', compact('cartas'));
    }

    public function buscar(Request $request)
    {
        $query = $request->get('q');
        
        if (empty($query)) {
            return response()->json([]);
        }
        
        $cartas = Carta::where('nombre', 'LIKE', "%{$query}%")
                        ->orWhere('juego', 'LIKE', "%{$query}%")
                        ->orWhere('rareza', 'LIKE', "%{$query}%")
                        ->take(20)
                        ->get();
        
        return response()->json($cartas);
    }

    
    public function buscarPorTexto(Request $request)
    {
        $texto = $request->get('texto');
        
        $carta = null;
        if ($texto) {
            $texto = strtolower($texto);
            $carta = Carta::where('nombre', 'LIKE', "%{$texto}%")->first();
        }
        
        return response()->json(['carta' => $carta]);
    }
}