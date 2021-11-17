<?php

$ages = [9, 12, 54,13, 31, 44, 33];

$reverseAge = [];
for ($i = 6; $i >= 0; $i = $i - 1) {
    $reverseAge[] = $ages[$i];
}

echo "\n";
foreach ($ages as $v) {
    echo $v . ', ';
}

echo "\n";
foreach ($reverseAge as $v) {
    echo $v . ', ';
}
