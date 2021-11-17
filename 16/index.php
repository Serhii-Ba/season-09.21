<?php

function plus($a, $b)
{
    static $c = 0;

    $c = $c + ($a + $b);

    return $c;
}

echo plus(10, 20) . "\n";
echo plus(30, 40) . "\n";
echo plus(10, 10) . "\n";
