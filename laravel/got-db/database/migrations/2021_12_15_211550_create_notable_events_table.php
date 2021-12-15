<?php

use App\Enums\NotableEventType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotableEventsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('notable_events', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->enum('event_type', NotableEventType::getKeys());
      $table->date('date');
      $table->text('description');
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
    Schema::dropIfExists('notable_events');
  }
}
