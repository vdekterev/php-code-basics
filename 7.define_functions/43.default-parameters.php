<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

// BEGIN
function getHiddenCard(string $card, int $asteriskCount = 4): string
{
    $visibleChars = substr($card, -4);
    $asterisk = str_repeat('*', $asteriskCount);
    return $asterisk . $visibleChars;
}
// END
