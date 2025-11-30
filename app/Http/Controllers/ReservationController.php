<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Models\Reservation;
use App\Models\Restaurant;

class ReservationController extends Controller
{
    public function create(Restaurant $restaurant)
    {
        return view('restaurant-reservation', ['restaurant' => $restaurant]);
    }

    public function store(Restaurant $restaurant, StoreReservationRequest $request)
    {
        $conflict = Reservation::where('restaurant_table_id', $request->restaurant_table_id)
            ->where(function ($q) use ($request) {
                $start = $request->start_time;
                $end   = $request->end_time;

                $q->whereBetween('start_time', [$start, $end])
                  ->orWhereBetween('end_time', [$start, $end])
                  ->orWhere(function ($q2) use ($start, $end) {
                      $q2->where('start_time', '<=', $start)
                         ->where('end_time', '>=', $end);
                  });
            })
            ->exists();

        if ($conflict) {
            return back()->withErrors([
                'reservation' => 'این میز در این بازه زمانی رزرو شده است.'
            ])->withInput();
        }

        $reservation = Reservation::create([
            'restaurant_id' => $restaurant->id,
            'restaurant_table_id' => $request->restaurant_table_id,
            'user_id' => auth()->user()->id,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()
            ->route('reservation.show', ['reservation' => $reservation, 'restaurant' => $restaurant])
            ->with('success', 'رزرو با موفقیت ثبت شد.');
    }

    public function show(Reservation $reservation)
    {
        return view('reservation-details', ['reservation' => $reservation]);
    }
}
