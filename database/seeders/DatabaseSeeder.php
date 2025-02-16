<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 random users
        User::factory(10)->create();

        // Ensure there is a default test user
        User::factory()->create([
            'id' => 1, // Laravel might override this, so be cautious
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('pass123'),
        ]);

        // Generate 100 notes linked to existing users
        Note::factory(100)->create();
    }
}
