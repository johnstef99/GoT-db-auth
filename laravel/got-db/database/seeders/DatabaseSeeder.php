<?php

namespace Database\Seeders;

use App\Enums\CharacterTitles;
use App\Models\Character;
use App\Models\CharacterTitle;
use App\Models\House;
use App\Models\NonHuman;
use App\Models\NotableEvent;
use App\Models\Religion;
use App\Models\Location;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */

  private function randomTitle()
  {
    $c = CharacterTitles::getKeys();
    $r = array_rand($c);
    return $c[$r];
  }

  public function run()
  {
    $houses = House::factory()->count(3)->create();
    $religions = Religion::factory()->count(5)->create();
    NonHuman::factory()->count(50)->create();

    foreach ($houses as $house) {
      Character::factory(['house_leader' => true])->for($house)->create();
      Character::factory()->count(9)->for($house)->create();
      $members = $house->members()->get();
      $members->each(function ($char) use ($religions, $members) {
        $char->religions()->attach($religions->random());
        $char->friends()->attach($members->where('id', '!=', $char->id)->random(3));
        $char->relatives()->attach($members->where('id', '!=', $char->id)->random(3));
        if (fmod($char->id, 5) == 0) {
          $title = $this->randomTitle();
          $char->titles()->save(new CharacterTitle(['title' => $title]));
        }
        if (fmod($char->id, 2) == 0) {
          $char->owns()->attach(NonHuman::factory()->create());
        }
      });
    }

    $events = NotableEvent::factory()->count(10)->create();
    foreach ($events as $event) {
      $event->participants()->sync(Character::all()->random(15));
      $event->locations()->attach(Location::factory()->create());
    }
  }
}
