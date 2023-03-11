<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::factory()->create(['name' => 'Admin']);
        Role::factory()->create(['name' => 'Venue']);
        Role::factory()->create(['name' => 'User']); 
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
