<?php

namespace App\Models;

use App\Enums\CharacterTitles;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;


/**
 * @property String $name
 * @property Carbon $date_of_birth
 * @property Carbon $date_of_death
 * @property CharacterTitles $titles
 * @property boolean $house_leader
 * @property int $id
 */
class Character extends Model
{
    use HasFactory;

    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }

    public function religions(): BelongsToMany
    {
        return $this->belongsToMany(Religion::class);
    }

    public function relatives(): BelongsToMany
    {
        return $this->belongsToMany(Character::class, 'character_relatives', 'left_id', 'right_id');
    }

    public function friends(): BelongsToMany
    {
        return $this->belongsToMany(Character::class, 'character_friends', 'left_id', 'right_id');
    }

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(NotableEvent::class, 'character_event');
    }

    public function titles()
    {
        return $this->hasMany(
            CharacterTitle::class,
        );
        //return DB::table('assigned_character_titles')
        //    ->where('character_id', '=', $this->id)
        //    ->get()->map(function ($e){
        //        return CharacterTitles::fromKey($e->title);
        //    });
    }
}
