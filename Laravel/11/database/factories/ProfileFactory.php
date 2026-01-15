<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
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
            'user_id' => User::factory(),
            'avatar' => $this->faker->randomElement([
                'https://i.pravatar.cc/150?img=1',
                'https://i.pravatar.cc/150?img=2',
                'https://i.pravatar.cc/150?img=3',
                'https://i.pravatar.cc/150?img=4',
                'https://i.pravatar.cc/150?img=5',
            ]),
            'bio' => $this->faker->paragraph(),
            
        ];
    }
}
