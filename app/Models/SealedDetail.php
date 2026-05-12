<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SealedDetail extends Model
{
    protected $primaryKey = 'product_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['product_id', 'sealed_type', 'set_name', 'release_year'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}