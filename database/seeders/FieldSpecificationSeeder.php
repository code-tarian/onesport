<?php

namespace Database\Seeders;

use App\Models\FieldSpecification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FieldSpecification::factory()->count(4)->create();
    }
}
