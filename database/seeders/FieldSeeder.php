<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\Venue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $venues = Venue::all()->count();
        Field::factory($venues)->create();
    }
}
