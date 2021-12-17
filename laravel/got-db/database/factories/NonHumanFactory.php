<?php

namespace Database\Factories;

use App\Models\NonHuman;
use Illuminate\Database\Eloquent\Factories\Factory;

class NonHumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'species' => $this->faker->word(),
        ];
    }
}
