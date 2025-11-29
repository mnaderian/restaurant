<?php

namespace App\Policies;

use App\Models\Restaurant;
use App\Models\User;

class ReservationPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create(User $user, Restaurant $restaurant)
    {
        return $restaurant->active;
    }
}
