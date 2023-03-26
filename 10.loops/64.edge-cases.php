<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN
function isArgumentsForSubstrCorrect(string $str, int $startIndex, int $subStrlength): bool
{
    switch (true) {
        case $startIndex < 0:
        case $subStrlength < 0 :
        case strlen($str) <= $startIndex:
        case strlen($str) < $subStrlength + $startIndex:
            return false;
        default:
            return true;
    }
}
// END