<?php

namespace Database\Factories;

use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Field>
 */
class FieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $venues = Venue::all()->pluck('id')->toArray();

        return [
            'venue_id' => fake()->randomElement($venues),
            'slug' => fake()->slug(),
            'name' => fake()->colorName(),
            'image' => 'default.png',
            'description' => fake()->sentence(),
            'active' => fake()->numberBetween(0, 1),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
