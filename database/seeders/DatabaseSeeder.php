<?php

namespace Database\Seeders;

use App\Models\Food;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Subcat;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(50)->create();
        // Category::factory(10)->create();
        //Subcat::factory(10)->create();
        Food::factory(50)->create();
        //Order::factory(50)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
