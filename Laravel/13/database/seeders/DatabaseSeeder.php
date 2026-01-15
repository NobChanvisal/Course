<?php

namespace Database\Seeders;

use App\Models\Orders;
use App\Models\User;
use App\Models\OrderItems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Orders::factory(2) 
            ->has(OrderItems::factory(3)) //  3 OrderItems to it
            ->create(); // 2 orders
        Orders::factory(3) 
            ->has(OrderItems::factory(2)) // 2 OrderItems to it
            ->create(); // 3 orders

        Orders::factory(1) 
            ->has(OrderItems::factory(5)) // Attach 5 OrderItems to it
            ->create(); // Save to the database
    }
}
