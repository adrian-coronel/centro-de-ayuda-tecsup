<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Administrator;
use App\Models\Incident;
use App\Models\Report;
use App\Models\Service;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();
        Administrator::factory(20)->create();
        Service::factory(5)->create();
        Incident::factory(50)->create();
        Staff::factory(50)->create();
        Report::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
