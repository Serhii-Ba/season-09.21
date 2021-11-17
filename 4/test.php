<?php

$users = [
    ['name' => 'Alex', 'age' => 10],
    ['name' => 'Ivan', 'age' => 11],
    ['name' => 'John', 'age' => 12],
    ['name' => 'Mike', 'age' => 13],
];

//$users[99] = ['name' => 'Nike', 'age' => 14];

foreach ($users as $n => $x) {
    echo "№" . $n . ' ' . $x['name'] . ' = ' . $x['age'] . "\n";
}

echo 'Last index: ' . $n;

for ($i = 0; $i < ($n + 1); $i = $i + 1) {
    echo $users[$i]['name'] . ' = ' . $users[$i]['age'] . "\n";
}
