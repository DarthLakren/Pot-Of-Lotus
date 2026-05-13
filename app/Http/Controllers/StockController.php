<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SingleDetail;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function create()
    {
        return view('stock.subir');
    }

    public function store(Request $request)
    {
        // 1. IMPORTANTE: Validar los datos antes de hacer nada
        $request->validate([
            'game_id' => 'required',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        DB::transaction(function () use ($request) {
            // 2. Guardamos en PRODUCTS
            $product = Product::create([
                'game_id'      => $request->game_id,
                'name'         => $request->name,
                'product_type' => 'single',
                'price'        => $request->price,
                'description'  => $request->description ?? 'Carta individual',
                'stock'        => $request->stock,
                'image_url'    => $request->file('image') 
                                    ? $request->file('image')->store('products', 'public') 
                                    : null,
            ]);

            // 3. Guardamos en SINGLE_DETAILS usando el ID del producto
            // Esto asume que tienes 'public function singleDetail()' en el modelo Product
            $product->singleDetail()->create([
                'card_name'   => $request->name,
                'edition'     => $request->edition,
                'condition'   => $request->condition,
                'language'    => 'Español',
                'foil'        => $request->has('foil'),
                'rarity'      => $request->rarity,
                'card_number' => $request->card_number,
            ]);
        });

        return redirect()->route('stock.create')->with('status', '¡Carta añadida al inventario!');
    }
}