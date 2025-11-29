<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'علی احمدی',
            'email' => 'ali.ahmadi@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'مهدی نادریان',
            'email' => 'naderian.mahdi@gmail.com',
            'role' => UserRole::ADMIN,
        ]);

        User::factory(10)->create();
    }
}
