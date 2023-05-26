<?php

namespace Database\Factories;

use App\Models\Administrator;
use App\Models\User;
use App\Models\Incident;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $incidentIds = Incident::pluck('id_incident')->toArray();
        $userIds = User::pluck('id_user')->toArray();
        $administratorIds = Administrator::pluck('id_administrator')->toArray();
        $serviceIds = Service::pluck('id_service')->toArray();


        return [
            'id_incident' => fake()->unique()->randomElement($incidentIds),
            'id_user' => fake()->randomElement($userIds),
            'id_administrator' => fake()->randomElement($administratorIds),
            'id_service' => fake()->randomElement($serviceIds),
            'title' => fake()->title(),
            'creation_date' => fake()->date(),
            'description' => fake()->text(70),
        ];
    }
}
