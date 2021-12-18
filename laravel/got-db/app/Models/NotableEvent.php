<?php

namespace App\Models;

use App\Enums\NotableEventType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int id
 * @property String name
 * @property NotableEventType type
 * @property Carbon date
 * @property String description
 */
class NotableEvent extends Model
{
  use HasFactory;

  public function locations(): BelongsToMany
  {
    return $this->belongsToMany(Location::class, 'location_notable_event');
  }

  public function participants(): BelongsToMany
  {
    return $this->belongsToMany(Character::class, 'character_notable_event');
  }
}
