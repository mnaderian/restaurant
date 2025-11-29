<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'restaurant_id',
        'restaurant_table_id',
        'user_id',
        'start_time',
        'end_time',
    ];

    public function table()
    {
        return $this->belongsTo(RestaurantTable::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
