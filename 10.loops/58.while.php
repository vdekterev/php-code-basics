<?php

namespace HexletBasics\Loops\WhileLoop;

function printNumbers(int $lastNumber): void
{
    // BEGIN
    while ($lastNumber > 0){
        echo $lastNumber. "\n";
        $lastNumber--;
    }
    echo 'finished!';
    // END
}