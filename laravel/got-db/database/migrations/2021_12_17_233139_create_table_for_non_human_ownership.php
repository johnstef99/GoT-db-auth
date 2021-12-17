<?php

use App\Models\Character;
use App\Models\NonHuman;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableForNonHumanOwnership extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_non_human', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Character::class)->constrained('characters');
            $table->foreignIdFor(NonHuman::class)->constrained('non_humans');
            $table->year('from_year')->nullable();
            $table->year('to_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_non_human');
    }
}
