<?php

namespace Database\Seeders;

use App\Models\Specification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specification::factory()->create(['name' => 'Jenis Lantai']);
        Specification::factory()->create(['name' => 'Panjang Lapangan']);
        Specification::factory()->create(['name' => 'Lebar Lapangan']);
        Specification::factory()->create(['name' => 'Ukuran Gawang']);
    }
}
