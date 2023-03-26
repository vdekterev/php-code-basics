<?php

function joinNumbersFromRange(int $start, int $finish): string
{
    if ($start === $finish){
        return $start;
    }
    $currentStart = $start;
    $start ++;
    return $currentStart.joinNumbersFromRange($start, $finish);
}
