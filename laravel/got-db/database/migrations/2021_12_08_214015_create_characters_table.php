<?php

use App\Enums\CharacterTitles;
use App\Models\House;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('characters', function (Blueprint $table) {
      $table->id();
      $table->foreignIdFor(House::class)->nullable()->constrained('houses');
      $table->string('name');
      $table->date('date_of_birth')->nullable();
      $table->date('date_of_death')->nullable();
      $table->boolean('house_leader')->default(false);
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
    Schema::dropIfExists('characters');
  }
}
