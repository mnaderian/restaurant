<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /** @use HasFactory<\Database\Factories\RestaurantFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'food_type',
        'address',
        'external_environment',
        'internal_environment',
        'points',
        'image',
        'phone',
        'services',
        'active',
    ];
}
