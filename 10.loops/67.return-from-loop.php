<?php

namespace HexletBasics\Loops\ReturnFromLoop;

// BEGIN

function hasChar(string $str, string $char): bool
{
    $i = 0;
    while ($i < strlen($str)){
        if ($str[$i] === $char){
            return true;
        }
        $i++;
    }
    return false;
}
// END
