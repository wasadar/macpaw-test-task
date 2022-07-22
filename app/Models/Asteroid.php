<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asteroid extends Model
{
    use HasFactory;

    protected $fillable = [
        'referenced',
        'name',
        'speed',
        'is_hazardous',
        'date'
    ];

    protected $table = "NearEarthObject";
}
