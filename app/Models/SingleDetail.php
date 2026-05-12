<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SingleDetail extends Model
{
    protected $primaryKey = 'product_id'; // Llave primaria personalizada
    public $incrementing = false;        // No es autoincremental
    public $timestamps = false;          // No tiene created_at/updated_at en el diagrama

    protected $fillable = [
        'product_id', 'card_name', 'edition', 'condition', 
        'language', 'foil', 'rarity', 'card_number'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}