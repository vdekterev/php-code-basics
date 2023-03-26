<?php

namespace HexletBasics\Loops\Mutators;

// BEGIN
function makeItFunny(string $str, int $nElem)
{
    $i = 0;
    $funnyStr = '';
    while ($i < strlen($str)) {
        if (($i + 1) % $nElem === 0) {
            $funnyStr .= strtoupper($str[$i]);
            $i++;
            continue;
        }
        $funnyStr .= $str[$i];
        $i++;
    }
    return $funnyStr;
}

// END
