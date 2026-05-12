<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pack_details', function (Blueprint $table) {
            $table->foreignId('product_id')->primary()->constrained('products')->onDelete('cascade');
            $table->string('pack_type'); // Ejemplo: 'Standard', 'Collector'
            $table->string('set_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pack_details');
    }
};
