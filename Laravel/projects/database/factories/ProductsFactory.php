<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categories;
use Illuminate\Support\Str;
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
        $name = $this->faker->unique()->words(3, true);
        $price = $this->faker->randomFloat(2, 10, 100);

        $discounted_price = null;
        $price_type = $this->faker->randomElement(['percent', 'fixed', 'none']);
        if ($price_type === 'percent') {
            $percent = $this->faker->numberBetween(5, 75);
            $discounted_price = round($price - ($price * $percent / 100), 2);
        } elseif ($price_type === 'fixed') {
            $discounted_price = $this->faker->randomFloat(2, 1, max(1, $price - 5));
        }

        return [
            'category_id' => Categories::inRandomOrder()->value('id'),
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'price' => $price,
            'price_type' => $price_type,
            'discounted_price' => $discounted_price,
            'status' => $this->faker->randomElement(['available', 'unavailable']),
            'image' => $this->faker->randomElement([
                '01.jpg',
                '02.jpg',
                '03.jpg',
                '04.jpg',
                '05.jpg',
                '06.jpg',
                '07.jpg',
            ]),
        ];
    }
}
