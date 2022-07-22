<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Asteroid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asteroid>
 */
class AsteroidFactory extends Factory
{
    protected $model = Asteroid::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'referenced' => fake()->word(),
            'name' => fake()->name(),
            'speed' => fake()->randomNumber(),
            'is_hazardous' => fake()->randomElement([true,false]),
            'date' => fake()->date()
        ];
    }
}
