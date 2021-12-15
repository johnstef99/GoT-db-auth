<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Character extends Model
{
  use HasFactory;

  protected $casts = [
    'name' => 'string',
    'year_of_birth' => 'immutable_date'
  ];

  public function house(): BelongsTo
  {
    return $this->belongsTo(House::class);
  }

  public function religion(): BelongsTo
  {
    return $this->belongsTo(Religion::class);
  }

  public function relatives(): BelongsToMany
  {
    return $this->belongsToMany(Character::class, 'character_relatives', 'left_id', 'right_id');
  }

  public function friends(): BelongsToMany
  {
    return $this->belongsToMany(Character::class, 'character_friends', 'left_id', 'right_id');
  }
}
