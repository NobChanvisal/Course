<?php

namespace Database\Factories;

use App\Models\Categories;
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
        $price = $this->faker->randomFloat(2, 1, 100);
        return [
            //
            'category_id' => Categories::inRandomOrder()->first()->id,
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $price,
            'discounted_price' => $this->faker->randomFloat(2, 0, $price),
            'status' => $this->faker->randomElement(['available', 'unavailable']),
            'image' => $this->faker->randomElement([
                'https://i.pravatar.cc/150?img=6',
                'https://i.pravatar.cc/150?img=7',
                'https://i.pravatar.cc/150?img=8',
                'https://i.pravatar.cc/150?img=9',
                'https://i.pravatar.cc/150?img=10',
            ])
        ];
    }
}
