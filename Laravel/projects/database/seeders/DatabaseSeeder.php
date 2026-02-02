<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use App\Models\Orders;
use App\Models\OrderItems;
use App\Models\Banner;
use App\Models\Carts;
use App\Models\CartItems;
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
        User::factory()->create([
                'name' => 'Admin',
                'email' => 'Admin168@example.com',
                'role' => 'admin',
                'password' => bcrypt('Admin@123'), 
            ]);
        Banner::factory()->create([
            'title' => 'Summer Sale',
            'description' => 'Get up to 50% off on selected items during our Summer Sale!',
            'link' => '/shop',
            'image' => 'https://i.pinimg.com/1200x/e8/1b/4f/e81b4f09ffab6738fb9c47b10771acc4.jpg',
        ]);


            
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'dara',
            'email' => 'dara@example.com',
            'password' => bcrypt('dara@123')
        ]);
        Categories::factory(5)->create();
        Products::factory(50)->create();

        Carts::factory()
            ->has(CartItems::factory(3)) // Attach 3 Cart_items to it
            ->create([
                'user_id' => 12
            ]);
        Carts::factory(3)
            ->has(CartItems::factory(2)) // Attach 2 Cart_items to it
            ->create();
        Carts::factory(2)
            ->has(CartItems::factory(5)) // Attach 5 Cart_items to it
            ->create();


        Orders::factory(2) 
            ->has(OrderItems::factory(3)) //  3 OrderItems to it
            ->create(); // 2 orders
        Orders::factory(3) 
            ->has(OrderItems::factory(2)) // 2 OrderItems to it
            ->create(); // 3 orders

        Orders::factory(1) 
            ->has(OrderItems::factory(5)) // Attach 5 OrderItems to it
            ->create();
        
    }
}
