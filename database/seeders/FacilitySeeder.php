<?php

namespace Database\Seeders;

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
        DB::table('facilities')->insert([
            [
                'name' => 'Coffee Shop',
                'icon' => 'default.png',
                'description' => fake()->sentence(),
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mushola',
                'icon' => 'default.png',
                'description' => fake()->sentence(),
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Parking Area',
                'icon' => 'default.png',
                'description' => fake()->sentence(),
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
