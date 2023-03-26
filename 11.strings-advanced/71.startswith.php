<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith(string $text, string $substr): bool
{
    // BEGIN
    return mb_strrpos($text, $substr) === 0;
    // END
}
