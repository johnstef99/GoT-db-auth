<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property String $name
 * @property String $slogan
 */
class House extends Model
{
    use HasFactory;

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function members(): HasMany
    {
        return $this->hasMany(Character::class);
    }

    /**
     * @psalm-suppress all
     */
    public function leaders(): HasMany
    {
        return $this->members()
            ->where('house_leader', '=', true);
    }

}
