<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackDetail extends Model
{
    protected $primaryKey = 'product_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['product_id', 'pack_type', 'set_name'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}