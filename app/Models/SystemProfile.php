<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemProfile extends Model
{
    use HasFactory;

    const SYSTEM_PROFILE_USER = 3;

    protected $fillable = [
        'profile'
    ];

    public $timestamps = false;
}
