<?php

namespace Database\Factories;

use App\Models\Field;
use App\Models\Specification;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FieldSpecification>
 */
class FieldSpecificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fields = Field::all()->pluck('id')->toArray();
        $specification = Specification::all()->pluck('id')->toArray();

        return [
            'field_id' => fake()->randomElement($fields),
            'specification_id' => fake()->randomElement($specification),
            'value' => fake()->numberBetween(0, 100) . 'x' . fake()->numberBetween(0, 100) . 'm',
        ];
    }
}
