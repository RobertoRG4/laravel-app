<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Superhero;

class SuperheroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Superhero::factory()->create();
        Superhero::create([
            'name' => 'Superman',
            'real_name' => 'Clark Kent',
            'publisher' => 'DC Comics',
            'universo_id' => 1, // Ensure this ID exists in the universos table
            'genero_id' => 1, // Ensure this ID exists in the generos table
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
