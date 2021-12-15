<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property String $name
 * @property String $slogan
 */
class House extends Model
{
  use HasFactory;

  protected $casts = [
    'name' => 'string',
    'slogan' => 'string',
  ];

  public function location(): BelongsTo
  {
    return $this->belongsTo(Location::class);
  }

  public function founder(): BelongsTo
  {
    return $this->belongsTo(
      Character::class,
      'founder_character_id',
    );
  }

  public function members(): HasMany
  {
    return $this->hasMany(
      Character::class,
    );
  }
}
