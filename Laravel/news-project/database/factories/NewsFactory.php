<?php

namespace Database\Factories;

use App\Models\Authors;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'category_id' => Categories::inRandomOrder()->first()->id,
            'authors_id' => Authors::inRandomOrder()->first()->id,
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['public', 'unpublic']),
            'thumbnail' => $this->faker->randomElement([
                'https://i.pinimg.com/736x/69/7b/62/697b620a04a320d9cd0671efeebc7b16.jpg',
                'https://i.pinimg.com/736x/87/31/b3/8731b30da6ea41c051f6fa4821136b22.jpg',
                'https://i.pinimg.com/736x/02/b9/4b/02b94bcaa4821079a7b9fd14ae917e57.jpg',
                'https://i.pinimg.com/1200x/37/e3/68/37e368b44ca3154082c18372f757a566.jpg',
                'https://i.pinimg.com/736x/3c/b0/b7/3cb0b71ec4cb069bedf5af2ec3fd53e4.jpg'
            ])
        ];
    }
}
