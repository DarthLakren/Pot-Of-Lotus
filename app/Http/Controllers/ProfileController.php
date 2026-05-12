<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Muestra la vista de detalles del perfil.
     */
    public function edit()
    {
        $user = Auth::user();
        
        // Cargamos el perfil. Si no existe, pasamos un objeto vacío para evitar errores en Blade.
        $profile = $user->profile ?? new UserProfile();

        return view('pages.cuenta', compact('user', 'profile'));
    }

    /**
     * Actualiza o crea el perfil del usuario.
     */
    public function update(Request $request)
    {
        // 1. Validar los datos que vienen del formulario
        $request->validate([
            'full_name' => 'required|string|max:255',
            'address'   => 'required|string|max:255',
            'city'      => 'required|string|max:100',
            'zip_code'  => 'required|numeric|digits_between:4,6',
            'state'     => 'required|string|max:100',
        ]);

        // 2. Guardar en la tabla user_profiles
        // Usamos updateOrCreate para que si no tiene perfil, lo cree automáticamente
        Auth::user()->profile()->updateOrCreate(
            ['user_id' => Auth::id()], // Condición para buscar
            [
                'full_name' => $request->full_name,
                'address'   => $request->address,
                'city'      => $request->city,
                'zip_code'  => $request->zip_code,
                'state'     => $request->state,
            ]
        );

        // 3. Redirigir con mensaje de éxito
        return back()->with('status', '¡Tus datos de duelo han sido actualizados!');
    }
}