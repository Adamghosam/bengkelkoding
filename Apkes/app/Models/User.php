<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users'; // Sudah cocok

    protected $fillable = [
        'nama', 'alamat', 'no_hp', 'email', 'role', 'password'
    ];

    protected $hidden = [
        'password',
    ];
}
