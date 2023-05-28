<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incident>
 */
class IncidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Retorna una array con todos los id existentes
        $userIds = User::pluck('id_user')->toArray();
        $serviceIds = Service::pluck('id_service')->toArray();
        $optionImpact = ['Extenso / generalizado','Significativo / grande','Moderado / limitado','Menor / Localizado'];

        return [
            'id_user' => fake()->randomElement($userIds),
            'id_service' => fake()->randomElement($serviceIds),
            'subject' => fake()->name(),
            'date' => fake()->date(),
            'hour' => fake()->time(),
            'urgency' => fake()->randomElement(['critico','alto','medio','bajo']), 
            'impact' => fake()->randomElement($optionImpact),
            'description' => fake()->text(60),
        ];
    }
}
