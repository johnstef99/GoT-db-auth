<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class NotableEvent extends Model
{
  use HasFactory;

  public function locations(): BelongsToMany
  {
    return $this->belongsToMany(Location::class, 'location_notable_event');
  }

  public function participants(): BelongsToMany
  {
    return $this->belongsToMany(Character::class, 'character_event');
  }
}
