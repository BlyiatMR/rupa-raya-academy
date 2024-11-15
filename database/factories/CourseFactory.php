<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'type' => fake()->randomElement(['Offline', 'Online']),
            'start_date' => fake()->date(),
            'price' => fake()->randomElement(['30.000', '20.000', '50.000']),
            'description' => fake()->realTextBetween()
        ];
    }
}
