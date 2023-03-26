<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'role_id' => 1,
            'name' => 'Admin Onesport',
            'username' => 'admin',
            'email' => 'codetarian.inc@gmail.com',
            'gender' => 'Laki-laki',
            'city' => 'Tasikmalaya'
        ]);
        User::factory(4)->create([
            'role_id' => 2,
            'city' => 'Tasikmalaya'
        ]);
        User::factory(10)->create();
    }
}
