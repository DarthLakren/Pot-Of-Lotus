<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['user_id', 'full_name', 'address', 'city', 'zip_code', 'state'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
