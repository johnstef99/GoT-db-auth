<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\House;
use App\Models\Religion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {

    $firstChar = Character::factory()->create();

    $houseCreated = $firstChar->house;


    $religionCreated = $firstChar->religion;

    Character::factory()->count(10)->for($houseCreated)->for($religionCreated)->create();
  }
}
