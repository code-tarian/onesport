<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\Venue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenueFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $venues = Venue::all()->pluck('id')->toArray();
        $facilities = Facility::all()->pluck('id')->toArray();

        for ($i = 0; $i < count($venues); $i++) {
            DB::table('venue_facilities')->insert([
                'venue_id' => fake()->randomElement($venues),
                'facility_id' => fake()->randomElement($facilities),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
