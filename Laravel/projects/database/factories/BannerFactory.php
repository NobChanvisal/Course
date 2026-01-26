<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
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
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'link' => $this->faker->url(),
            'text_color' => $this->faker->randomElement(['#FFFFFF', '#000000', '#FF5733', '#33FF57', '#3357FF']),
            'image' => $this->faker->imageUrl(800, 400, 'banner', true),
        ];
    }
}
