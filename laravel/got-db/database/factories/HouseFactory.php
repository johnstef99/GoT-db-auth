<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->country(),
            'slogan' => $this->faker->sentence(),
            'location_id' => Location::factory()->create(),
            //'founder_character_id' => Character::factory()->create(),
        ];
    }
}
