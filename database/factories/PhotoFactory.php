<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'path' => 'https://picsum.photos/seed/' . fake()->unique()->slug(2) . '/1200/800',
            'user_id' => User::factory()->state([
                'role' => 'photographer',
            ]),
        ];
    }
}
