<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specification>
 */
class SpecificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'spec',
            'description' => fake()->sentence(),
            'active' => fake()->numberBetween(0, 1),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
