<?php

namespace HexletBasics\Loops\SyntaxSugar;

// BEGIN
function filterString(string $str, string $char): string
{
    $i = 0;
    $newStr = '';
    while ($i < strlen($str)) {
        if ($str[$i] !== $char) {
            $newStr .= $str[$i];
        }
        $i++;
    }
    return $newStr;
}
// END