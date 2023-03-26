<?php

namespace HexletBasics\Loops\ReverseString;

// BEGIN
function mysubstr(string $str, int $charAmount): string
{
    $i = 0;
    $substring = '';
    while ($i < $charAmount){
        $substring .= $str[$i];
        $i++;
    }
    return $substring;
}
// END