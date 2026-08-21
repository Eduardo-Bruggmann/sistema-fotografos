<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Photo::factory()
            ->count(9)
            ->for($testUser)
            ->create();

        User::factory()
            ->count(3)
            ->state(['role' => 'photographer'])
            ->has(Photo::factory()->count(6))
            ->create();
    }
}
