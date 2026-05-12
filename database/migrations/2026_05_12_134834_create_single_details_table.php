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
        Schema::create('single_details', function (Blueprint $table) {
            $table->foreignId('product_id')->primary()->constrained('products')->onDelete('cascade');
            $table->string('card_name');
            $table->string('edition');
            $table->string('condition');
            $table->string('language');
            $table->boolean('foil')->default(false);
            $table->string('rarity');
            $table->string('card_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('single_details');
    }
};
