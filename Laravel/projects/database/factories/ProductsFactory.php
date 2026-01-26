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

        return [
            'category_id' => Categories::inRandomOrder()->value('id'),
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'price' => $price,
            'discounted_price' => $this->faker->randomFloat(2, 10, $price),
            'status' => $this->faker->randomElement(['available', 'unavailable']),
            'image' => $this->faker->randomElement([
                'https://i.pinimg.com/1200x/ee/5c/c5/ee5cc5607d903c2773e42133fe65d5ac.jpg',
                'https://i.pinimg.com/1200x/0a/d5/86/0ad5860eaa079163639dc7f91c49c864.jpg',
                'https://i.pinimg.com/1200x/ec/c4/54/ecc454ef5af8c5cf2f835da0144fbbf4.jpg',
                'https://i.pinimg.com/1200x/3e/da/79/3eda798fb25e5b07800af8e179754aa0.jpg',
                'https://i.pinimg.com/1200x/86/05/00/8605000b5a1309fb6fd6c5ce58915edd.jpg',
                'https://i.pinimg.com/1200x/a3/c6/3f/a3c63f2e5228793a7d1f777a174c5057.jpg'
            ]),
        ];
    }
}
