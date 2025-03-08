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
            'publisher' => $this->faker->company,
            'universo_id' => 1, 
            'genero_id' => 1,
            'picture' => $this->faker->imageUrl(640, 480, 'superhero'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
