<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cartas', function (Blueprint $table) {
            // Agregar las columnas que faltan
            if (!Schema::hasColumn('cartas', 'nombre')) {
                $table->string('nombre')->after('id');
            }
            if (!Schema::hasColumn('cartas', 'juego')) {
                $table->string('juego')->after('nombre');
            }
            if (!Schema::hasColumn('cartas', 'rareza')) {
                $table->string('rareza')->after('juego');
            }
            if (!Schema::hasColumn('cartas', 'descripcion')) {
                $table->text('descripcion')->after('rareza');
            }
            if (!Schema::hasColumn('cartas', 'precio')) {
                $table->decimal('precio', 8, 2)->after('descripcion');
            }
        });
    }

    public function down(): void
    {
        Schema::table('cartas', function (Blueprint $table) {
            $table->dropColumn(['nombre', 'juego', 'rareza', 'descripcion', 'precio']);
        });
    }
};