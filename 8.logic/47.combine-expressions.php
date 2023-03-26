<?php

namespace HexletBasics\Logic\CombineExpressions;

// BEGIN
function isInternationalPhone(string $phone): bool
{
    return str_starts_with($phone, '+');
}
// END