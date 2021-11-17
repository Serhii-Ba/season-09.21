<?php

function printUser($a1, $a2, $a3 = 'none') {
    echo '(here is printUser a1/a2/a3) ';
    echo $a1 . ', ' . $a2;

    if ('none' == $a3) {

    } else {
        echo ', ' . $a3;
    }

    echo "\n";
}

function printUserTernary($name, $age, $sex = 'none') {
    echo '(here is printUserTernary) ';
    echo $name . ', ' . $age . ('none' == $sex ? '' : (', ' . $sex));
    echo "\n";
}

function printHeader() {
    echo "========================\n";
}

function printFooter() {
    echo "------------------------\n";
}
