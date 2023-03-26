<?php

namespace HexletBasics\Dates\Mkdtime;

function getHexletBirthday(): int
{
    return mktime(0, 0, 0, 1, 1, 2012);
}
