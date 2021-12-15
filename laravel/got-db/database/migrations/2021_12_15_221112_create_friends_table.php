<?php

use App\Models\Character;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('character_friends', function (Blueprint $table) {
      $table->id();
      $table->foreignIdFor(Character::class, 'left_id')->constrained('characters');
      $table->foreignIdFor(Character::class, 'right_id')->constrained('characters');
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
    Schema::dropIfExists('character_friends');
  }
}
