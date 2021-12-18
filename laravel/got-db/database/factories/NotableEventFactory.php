<?php

namespace Database\Factories;

use App\Enums\NotableEventType;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotableEventFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'name' => $this->faker->sentence(3),
      'type' => NotableEventType::getKeys()[array_rand(NotableEventType::getKeys())],
      'date' => $this->faker->date(),
      'description' => $this->faker->text(100),
    ];
  }
}
