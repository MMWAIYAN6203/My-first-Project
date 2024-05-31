<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::factory()->create([
            'photo' => fake()->imageUrl(),
            'name' => 'admin',
            'role' => 'admin',
            'bio' => 'I am admin',
        ]);
        Team::factory(3)->create();
    }
}
