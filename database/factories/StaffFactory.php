<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        # pluck('<column>') obtiene un array de los valores de una columna específica
        $serviceIds =  Service::pluck('id_service')->toArray();

        return [
            'id_service' => fake()->randomElement($serviceIds),
            'name' => fake()->name(),
            'lastname' => fake()->lastName(),
            'second_lastname' => fake()->lastName(),
            'dni' => fake()->unique()->numberBetween(7000000,9999999),
            'email' => fake()->unique()->email(),
            'phone_number'=> fake()->phoneNumber(),
            'position' => fake()->text(60)
        ];
    }
}
