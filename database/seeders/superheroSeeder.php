<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Superhero;

class SuperheroSeeder extends Seeder{
    public function run(): void{
        Superhero::factory()->create();
        Superhero::create([
            'name' => 'Superman',
            'real_name' => 'Clark Kent',
            'publisher' => 'DC Comics',
            'universo_id' => 1, 
            'genero_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
