<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
* @property String $name
*/
class Religion extends Model
{
  use HasFactory;

  public function members(): HasMany
  {
    return $this->hasMany(Character::class);
  }
}
