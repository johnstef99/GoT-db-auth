<?php

namespace Database\Factories;

use App\Models\House;
use App\Models\Religion;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'name' => $this->faker->name(),
      'birthday' => $this->faker->dateTime(),
      'house_id' => House::factory(),
      'religion_id' => Religion::factory(),
    ];
  }
}
