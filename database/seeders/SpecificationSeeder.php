<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specifications')->insert([
            [
                'name' => 'Jenis Lantai',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Panjang Lantai',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lebar Lantai',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ukuran Gawang',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
