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







$users = [
    ['name' => 'Alex', 'age' => 10],
    ['name' => 'Ivan', 'age' => 11],
    ['name' => 'John', 'age' => 12],
    ['name' => 'Mike', 'age' => 13],
];

printHeader();
for ($i = 0; $i < 4; $i = $i + 1) {
    $name1 = $users[$i]['name'];
    $age1  = $users[$i]['age'];

    printUser($name1, $age1);
}

printUserTernary('Alex', 99);
printUserTernary('Rita', 98, 'Female');
printUserTernary('Nikita', 97);
printUserTernary('Titan', '96', 'Male');

printFooter();
