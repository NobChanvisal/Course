<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
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
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->randomElement([
                'https://i.pravatar.cc/150?img=1',
                'https://i.pravatar.cc/150?img=2',
                'https://i.pravatar.cc/150?img=3',
                'https://i.pravatar.cc/150?img=4',
                'https://i.pravatar.cc/150?img=5',
            ])

        ];
    }
}
