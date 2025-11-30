<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Relation;

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

    public function manager(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tables(): HasMany
    {
        return $this->hasMany(RestaurantTable::class);
    }

    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function workingHours(): HasMany
    {
        return $this->hasMany(RestaurantWorkingHour::class);
    }
}
