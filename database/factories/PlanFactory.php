<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->domainword(),
            'code' => Str::random(4),
            'short_description' => fake()->sentence(),
            'price' => fake()->numberBetween(1000, 19900)
        ];
    }
}
