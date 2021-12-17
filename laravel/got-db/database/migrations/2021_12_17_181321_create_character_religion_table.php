<?php

use App\Models\Character;
use App\Models\Religion;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterReligionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_religion', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Character::class)->constrained('characters');
            $table->foreignIdFor(Religion::class)->constrained('religions');
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
        Schema::dropIfExists('character_religion');
    }
}
