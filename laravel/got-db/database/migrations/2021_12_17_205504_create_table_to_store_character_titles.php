<?php

use App\Enums\CharacterTitles;
use App\Models\Character;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableToStoreCharacterTitles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_character_titles', function (Blueprint $table) {
            $table->primary(['character_id','title']);
            $table->foreignIdFor(Character::class)->constrained('characters');
            $table->enum('title', CharacterTitles::getKeys());
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
        Schema::dropIfExists('assigned_character_title');
    }
}
