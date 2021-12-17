<?php

namespace App\Models;

use App\Enums\CharacterTitles;
use BenSampo\Enum\Exceptions\InvalidEnumKeyException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $title
 */
class CharacterTitle extends Model
{
    use HasFactory;

    protected $fillable = ['title'];
    protected $table = 'assigned_character_titles';

    /**
     * @throws InvalidEnumKeyException
     */
    public function enum(): CharacterTitles
    {
        return CharacterTitles::fromKey($this->title);
    }
}
