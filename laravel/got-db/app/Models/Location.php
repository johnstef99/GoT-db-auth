<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
  use HasFactory;

  public function houses(): HasMany
  {
    return $this->hasMany(House::class);
  }

  public function events(): BelongsToMany
  {
    return $this->belongsToMany(NotableEvent::class, 'location_notable_event');
  }
}
