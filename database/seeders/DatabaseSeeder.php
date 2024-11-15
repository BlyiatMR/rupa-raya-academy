<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'level' => 'admin',
            'password' => '$2y$10$VrIb8TCDLsvBVCX4RIR7ZeYNX9fob4WNy32cIdYGmazgtDpWL3zly', // admin
            'email' => 'admin@gmail.com',
        ]);
    }
}
