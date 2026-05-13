<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate; // 1. IMPORTANTE: Importar Gate
use App\Models\User;                // 2. IMPORTANTE: Importar tu modelo User

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        App::setLocale('es');

        // 3. DEFINIR LA REGLA DE ACCESO
        Gate::define('admin-only', function (User $user) {
            // Compara ignorando mayúsculas/minúsculas para mayor seguridad
            return strtolower($user->role) === 'admin';
        });
    }
}