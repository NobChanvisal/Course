<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->word();
        return [
            //
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->randomElement([
                'https://i.pinimg.com/736x/b6/83/4e/b6834e4e404c9aaf98dcc5e4c0b44440.jpg',
                'https://i.pinimg.com/736x/1e/a4/7d/1ea47d10982bebad0a099f4439a9161f.jpg',
                'https://i.pinimg.com/736x/73/92/07/73920717e2a86ac088a1e53cd9c235fb.jpg',
                'https://i.pinimg.com/736x/17/f9/ac/17f9aca6927aff8621e8c375c05a9a48.jpg',
                'https://i.pinimg.com/1200x/89/47/5d/89475d9a656d38564cd6d02ce9abd48d.jpg'
            ])
        ];
    }
}
