<?php

namespace Database\Seeders;

use App\Models\Venue;
use App\Models\VenueFacility;
use Illuminate\Database\Seeder;

class VenueFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $venues = Venue::all()->count();
        VenueFacility::factory($venues)->create();
    }
}
