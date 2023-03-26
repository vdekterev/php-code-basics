<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN
function sumOfSeries(int $start, int $finish): int
{
    $sum = 0;
    for ($i = $start; $i <= $finish; $i++) {
        $sum += $i;
    }
    return $sum;
}
// END