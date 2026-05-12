<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    // Solo usamos created_at según tu diagrama
    const UPDATED_AT = null; 

    protected $fillable = ['product_id', 'quantity', 'type', 'reason'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}