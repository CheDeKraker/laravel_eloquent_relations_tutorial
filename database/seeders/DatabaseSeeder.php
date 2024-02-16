<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        foreach (range(1, 10) as $index) {
            \App\Models\User::factory()->create([
                'name' => 'Test User ' . $index,
                'email' => 'test' . $index . '@example.com',
                'password' => 'password->encrypted(password)',
            ]);
        }

        Profile::factory()->count(10)->create();
    }
}
