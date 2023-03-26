<?php

namespace HexletBasics\Conditionals\IfStatement;

// BEGIN (write your solution here)
function guessNumber(int $number): string
{
    if ($number === 42)
    {
        return 'You win!';
    }
    return 'Try again!';
}
// END