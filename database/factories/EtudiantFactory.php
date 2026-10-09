<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends  \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName'=> fake()->firstName(),
            'lastName' => fake()->lastName(),
            'email' =>fake()->unique()->safeEmail(),
            'password' => Hash::make(fake()->password()),
        ];
    }
}
