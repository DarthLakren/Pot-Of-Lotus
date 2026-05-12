<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'game_id', 'name', 'product_type', 'price', 
        'description', 'stock', 'image_url'
    ];

    // Relación con el Juego (Muchos productos pertenecen a 1 juego)
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    // Relaciones 1 a 1 con los detalles específicos
    public function singleDetail() { return $this->hasOne(SingleDetail::class); }
    public function sealedDetail() { return $this->hasOne(SealedDetail::class); }
    public function packDetail()   { return $this->hasOne(PackDetail::class); }

    // Relación con movimientos de inventario
    public function stockMovements()
    {
        return $this->hasMany(StockMovement::class);
    }
}