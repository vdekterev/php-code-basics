<?php

namespace HexletBasics\Loops\AgregationNumber;

// BEGIN
function multiplyNumbersFromRange(int $start, int $finish): int
{
    $i = $start;
    $res = 1;
    while ($i <= $finish) {
        $res *= $i;
        $i++;
    }
    return $res;
}
// END

// RECURSION SOLUTION
function multiplyNumbersFromRangeRecursion(int $start, int $finish): int
{
    if ($start === $finish) {
        return $start;
    }
    $currentStart = $start;
    $start++;
    return $currentStart * multiplyNumbersFromRangeRecursion($start, $finish);
}
