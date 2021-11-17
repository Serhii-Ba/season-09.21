<?php

$users = [
    ['name' => 'Alex', 'age' => 10],
    ['name' => 'Ivan', 'age' => 11],
    ['name' => 'John', 'age' => 12],
    ['name' => 'Mike', 'age' => 13],
];

$users[99] = ['name' => 'Nike', 'age' => 14];

foreach ($users as $i => $x) {
    // for/while:
    //echo 'for/while: ' . $users[$i]['name'] . ' = ' . $users[$i]['age'] . "\n";

    echo "№" . $i . ' ' . $x['name'] . ' = ' . $x['age'] . "\n";

}

echo 'end of foreach: ' . $users[99]['name'] . ' = ' . $users[99]['age'] . "\n";

var_dump($users);
