<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RestaurantSeeder::class,
            RestaurantTableSeeder::class,
        ]);
        $this->setRestaurantsForManagers();
    }

    public function setRestaurantsForManagers()
    {
        $managers = User::where('role', UserRole::MANAGER)->get();

        foreach ($managers as $manager) {
            $restaurant = Restaurant::where('user_id', $manager->id)->first();
            if ($restaurant) {
                $manager->restaurant_id = $restaurant->id;
                $manager->save();
            }
        }
    }
}
