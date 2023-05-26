<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->numberBetween(100000,999999),
            'password' => fake()->password(),
            'name' => fake()->name(),
            'lastname' => fake()->lastName(),
            'second_lastname' => fake()->lastName(),
            'email' => fake()->unique()->email(),
            'phone_number'=> fake()->phoneNumber(),
            'email_verified_at' => now(),
            'date_of_birth' => fake()->date(),
            'state' => 1,
        ];
        
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
