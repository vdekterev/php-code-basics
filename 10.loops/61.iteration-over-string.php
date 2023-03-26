<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN
function printReversedWordBySymbol(string $word): void
{
    $i = 0;
    $revWord = strrev($word);
    while($i < strlen($revWord)){
        print_r("$revWord[$i]\n");
        $i++;
    }
}
// END

