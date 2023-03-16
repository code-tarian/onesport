<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::factory()->create(['name' => 'Kantin']);
        Facility::factory()->create(['name' => 'Mushola']);
        Facility::factory()->create(['name' => 'Kafe']);
        Facility::factory()->create(['name' => 'Wifi']);
        Facility::factory()->create(['name' => 'Toilet']);
    }
}
