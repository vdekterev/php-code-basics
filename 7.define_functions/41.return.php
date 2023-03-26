<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

// BEGIN
function sayHurrayThreeTimes(): string
{
    return trim(str_repeat('hurray! ', 3));
}
// END