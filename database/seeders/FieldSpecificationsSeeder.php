<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldSpecificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('field_specifications')->insert([
            [
                'field_id' => 1,
                'specification_id' => 1,
                'value' => 'Rumput Sintetis',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 1,
                'specification_id' => 2,
                'value' => '38 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 1,
                'specification_id' => 3,
                'value' => '18 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 1,
                'specification_id' => 4,
                'value' => '3x2 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 2,
                'specification_id' => 1,
                'value' => 'Rumput Vinyl',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 2,
                'specification_id' => 2,
                'value' => '40 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 2,
                'specification_id' => 3,
                'value' => '20 M',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'field_id' => 2,
                'specification_id' => 4,
                'value' => '3x2 M',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
