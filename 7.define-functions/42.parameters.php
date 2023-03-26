<?php

namespace HexletBasics\DefineFunctions\Parameters;

// BEGIN
function truncate(string $text, int $chars): string
{
    return substr($text, 0, $chars). '...';
}
// END