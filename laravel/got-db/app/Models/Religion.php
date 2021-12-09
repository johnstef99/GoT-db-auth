<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Religion extends Model
{
  use HasFactory;

  public function leader(): HasOne
  {
    return $this->hasOne(
      Character::class,
      'id',
      'leader_character_id'
    );
  }

  public function members(): HasMany
  {
    return $this->hasMany(Character::class);
  }
}
