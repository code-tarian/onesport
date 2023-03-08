<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fields')->insert([
            [
                'venue_id' => 1,
                'slug' => 'lapangan-1',
                'name' => 'Lapangan 1',
                'image' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'venue_id' => 1,
                'slug' => 'lapangan-2',
                'name' => 'Lapangan 2',
                'image' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'venue_id' => 2,
                'slug' => 'lapangan-2',
                'name' => 'Lapangan 2',
                'image' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'venue_id' => 2,
                'slug' => 'lapangan-1',
                'name' => 'Lapangan 1',
                'image' => 'default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
