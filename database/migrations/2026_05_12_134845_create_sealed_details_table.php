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
        Schema::create('sealed_details', function (Blueprint $table) {
            $table->foreignId('product_id')->primary()->constrained('products')->onDelete('cascade');
            $table->string('sealed_type');
            $table->string('set_name');
            $table->integer('release_year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sealed_details');
    }
};
