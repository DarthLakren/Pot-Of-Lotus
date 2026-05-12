<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Los atributos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'username', // Cambiado de 'name' a 'username'
        'email',
        'password',
        'role',     // Agregamos 'role' para que Laravel te permita guardarlo
    ];

    /**
     * Los atributos que deben ocultarse para la serialización (por seguridad).
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Los casts para los atributos.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relación con las órdenes (Diagrama: USERS 1 --- M ORDERS)
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }
}