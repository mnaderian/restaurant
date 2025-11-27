<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::paginate(8);

        return view('restaurants', ['restaurants' => $restaurants]);
    }

    public function search(Request $request)
    {
        $keywords = $request->input('keywords');
        $type = $request->input('type');

        $results = collect(Restaurant::whereLike($type, "%$keywords%")->get());
        $resultsCount = $results->count();

        return view('search', [
            'restaurants' => $results,
            'resultsCount' => $resultsCount,
        ]);
    }

    public function filter(Request $request)
    {
        $points = $request->input('points');
        $price = $request->input('price');
        $foodType = $request->input('food_type');
        $externalEnvironment = $request->input('external_environment');
        $internalEnvironment = $request->input('external_environment');

        $results = collect(
            Restaurant::orWhere('points', $points)
                ->orWhere('food_type', $foodType)
                ->orWhere('external_environment', $externalEnvironment)
                ->orWhere('internal_environment', $internalEnvironment)
                ->get()
        );
        $resultsCount = $results->count();

        return view('search', [
            'restaurants' => $results,
            'resultsCount' => $resultsCount,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurant-details', [
            'restaurant' => $restaurant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
