<?php

namespace Database\Seeders;

use App\Models\House;
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
        $house = new House();
        $name = $house->name;
        // \App\Models\User::factory(10)->create();
    }
}
