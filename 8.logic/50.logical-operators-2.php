<?php

namespace HexletBasics\Logic\LogicalOperators2;

// BEGIN
function isNeutralSoldier(string $armorColor, string $shieldColor): bool
{
    return $armorColor !== 'red' && $shieldColor === 'black';
}
// END