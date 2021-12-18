<?php

use APp\Models\Character;
use APp\Models\NotableEvent;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ManyToManyCharacterNotableEvent extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('character_notable_event', function (Blueprint $table) {
      $table->id();
      $table->foreignIdFor(Character::class)->constrained('characters');
      $table->foreignIdFor(NotableEvent::class)->constrained('notable_events');
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
    Schema::dropIfExists('character_notable_event');
  }
}
