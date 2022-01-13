<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

final class CharacterTitles extends Enum implements LocalizedEnum
{
    const HandOfKink = 0;
    const Warden = 1;
    const Khaleesi = 2;
    const KingOfNorth = 3;
    const LordCommander = 4;
}
