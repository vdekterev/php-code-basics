<?php

namespace HexletBasics\Dates\DateFunction;

function getCustomDate(int $timestamp)
{
    return date('d/m/Y', $timestamp);
}
