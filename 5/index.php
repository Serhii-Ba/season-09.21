<?php

$z = 100;
$x = 200;
$y = $x + $z;

function printUser($a1, $a2, $a3 = 'none') {
    echo '(here is printUser a1/a2/a3) ';
    echo $a1 . ', ' . $a2;

    if ('none' == $a3) {

    } else {
        echo ', ' . $a3;
    }

    $z = 50;
    echo ', z = ' . $z;
    echo "\n";
}


$a1 = 10;

echo 'Hello!' . "\n";
printUser('Alex', 99);

echo ',........z = '. $z;
