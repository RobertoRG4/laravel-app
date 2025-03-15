<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superhero>
 */
class SuperheroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'real_name' => $this->faker->name,
            'publisher' => $this->faker->company, // Ensure this line is present
            'universo_id' => 1, // Ensure this ID exists in the universos table
            'genero_id' => 1, // Ensure this ID exists in the generos table
            'picture' => $this->faker->imageUrl(640, 480, 'superhero'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
