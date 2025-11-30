<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class RestaurantWorkingHour extends Model
{
    protected $fillable = [
        'restaurant_id',
        'day',
        'open_time',
        'close_time',
        'is_closed',
    ];

    public function restaurant(): Relation
    {
        return $this->belongsTo(Restaurant::class);
    }
}
