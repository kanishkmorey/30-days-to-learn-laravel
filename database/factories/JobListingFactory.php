<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $amount = $this->faker->numberBetween(1, 12) * 10000;
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->realTextBetween(500, 800, 2),
            'employer_id' => Employer::factory(),
            'salary' => '$' . number_format($amount, 0, '.', ',') . ' USD'
        ];
    }
}
