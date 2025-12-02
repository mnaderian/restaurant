<?php

namespace Database\Seeders;

use App\Enums\UserRole;
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
            'role' => UserRole::MANAGER,
        ]);

        User::factory()->create([
            'name' => 'ادمین',
            'email' => 'admin@test',
            'role' => UserRole::ADMIN,
        ]);

        User::factory(100)->create();
    }
}
