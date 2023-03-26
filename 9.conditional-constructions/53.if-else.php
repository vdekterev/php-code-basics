<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN
function normalizeUrl(string $url): string
{
    if (strpos($url, 'http://') !== false){
        return 'https://'.substr($url, 7);
    }
    return 'https://'. $url;
}
// END
