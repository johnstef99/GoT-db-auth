<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
* @property String $name
* @property String $species
*/
class NonHuman extends Model
{
    use HasFactory;

    protected $fillable = ['name','species'];

  public function owners(): BelongsToMany
  {
    return $this->belongsToMany(Character::class);
  }
}
