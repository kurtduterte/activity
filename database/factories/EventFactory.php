<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_by' => \App\Models\User::factory(),
            'title' => fake()->sentence(3),
            'description' => fake()->sentence(),
            'location' => fake()->address(),
            'date' => fake()->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
        ];
    }
}
