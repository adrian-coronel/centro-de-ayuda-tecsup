<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Administrator>
 */
class AdministratorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'lastname' => fake()->lastName(),
            'second_lastname' => fake()->lastName(),
            'email' => fake()->unique()->email(),
            'phone_number'=> fake()->phoneNumber(),
            'position' => fake()->name(),
            'department' => fake()->lastName()
        ];
    }
}
