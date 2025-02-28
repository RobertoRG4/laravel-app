<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universo;

class UniversoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Universo::create([
            'id' => 1,
            'name' => 'DC Universe',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
