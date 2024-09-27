<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['R$4.500', 'R$2.200', 'R$3.400', 'R$7.900', 'R$1.412', 'R$1.980']),
            'location' => 'Remoto',
            'schedule' => 'Tempo integral',
            'url' => fake()->url,
            'featured' => false,
        ];
    }
}
