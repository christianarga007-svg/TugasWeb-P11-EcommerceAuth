<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin Christian',
            'email' => 'adminchristian@admin.com',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ]);

        \App\Models\User::factory(3)->create();

        \App\Models\Category::factory(10)->create();

        \App\Models\Product::factory(55)->create();
    }
}