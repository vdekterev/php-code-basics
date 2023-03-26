<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

// BEGIN
function countChars(string $haystack, string $needle): int
{
    $haystack = strtolower($haystack);
    $needle = strtolower($needle);

    $needleCount = 0;
    $i = 0;
    while ($i < strlen($haystack)){
        if ($haystack[$i] === $needle){
            $needleCount++;
        }
        $i++;
    }
    return $needleCount;
}
// END

