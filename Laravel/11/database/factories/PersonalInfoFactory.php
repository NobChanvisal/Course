<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal_info>
 */
class PersonalInfoFactory extends Factory
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
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'DOB' => $this->faker->date(),
        ];
    }
}
