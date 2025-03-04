<?php

namespace Database\Factories;

use App\Models\Societes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voyage>
 */
class VoyageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'place' => fake()->numberBetween(1, 60),
            'ville_depart'=> fake()->city(),
            'ville_arrivee'=>fake()->city(),
            'heure_depart'=>fake()->time(),
            'heure_arrivee'=>fake()->time(),
            'prix'=>fake()->randomFloat(2, 10, 500),
            'date_depart'=>fake()->date(),
            'date_arrivee'=>fake()->date(),
            'societe_id' => Societes::pluck('id')->random(),
        ];
    }
}
