<?php

use App\Models\Location;
use App\Models\NotableEvent;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationsToNotableEvents extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('location_notable_event', function (Blueprint $table) {
      $table->id();
      $table->foreignIdFor(Location::class)->constrained('locations');
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
    Schema::dropIfExists('location_notable_event');
  }
}
