<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

// BEGIN
function whoIsThisHouseToStarks(string $surname): string
{
    if (in_array($surname, ['Karstark', 'Tully'])) {
        return 'friend';
    } elseif (in_array($surname, ['Lannister', 'Frey'])) {
        return 'enemy';
    }
    return 'neutral';
}
// END
