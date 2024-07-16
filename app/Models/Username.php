<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Username extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
