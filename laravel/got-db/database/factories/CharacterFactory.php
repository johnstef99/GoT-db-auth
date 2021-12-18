<?php

namespace Database\Factories;

use App\Models\House;
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
    $death = $this->faker->date();
    $birth = $this->faker->date('Y-m-d', $death);
    return [
      'name' => $this->faker->name(),
      'date_of_birth' => $birth,
      'date_of_death' => $death,
      'house_id' => House::factory(),
      'house_leader' => false,
    ];
  }
}
