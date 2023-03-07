<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class ClientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'uuid' => Str::orderedUuid(),
            'user_id' => User::factory(),
            'name' => fake()->name,
            'document' => fake('pt_BR')->cpf(),
            'birthdate' => fake()->dateTimeThisCentury(),
        ];
    }
}
