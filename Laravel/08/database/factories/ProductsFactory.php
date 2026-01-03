<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $price = $this->faker->numberBetween(10, 100);
       return [
        'name' => $this->faker->words(3, true),
        'price' => $price,
        
        'category_id' => $this->faker->numberBetween(1, 5),
        'status' => $this->faker->randomElement(['available', 'unavailable']),
        'description' => $this->faker->sentence(),
    ];
    }
}
