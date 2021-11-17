<?php

$users = [
    ['name' => 'Alex', 'age' => 10],
    ['name' => 'Ivan', 'age' => 11],
    ['name' => 'John', 'age' => 12],
    ['name' => 'Mike', 'age' => 13],
];

echo "While: \n";
$i = 0;
while ($i < 4) {

    echo $users[$i]['name'] . ' = ' . $users[$i]['age'] . "\n";

    $i = $i + 1;
}

// =======================================================

echo "Do while: \n";
$i = 0;
do {

    echo $users[$i]['name'] . ' = ' . $users[$i]['age'] . "\n";

    $i++;
} while ($i < 4);
