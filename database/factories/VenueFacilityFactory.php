<?php

namespace Database\Factories;

use App\Models\Facility;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VenueFacility>
 */
class VenueFacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $venues = Venue::all()->pluck('id')->toArray();
        $facilities = Facility::all()->pluck('id')->toArray();

        return [
            'venue_id' => fake()->randomElement($venues),
            'facility_id' => fake()->randomElement($facilities),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
