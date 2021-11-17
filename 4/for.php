<?php

$users = [
    ['name' => 'Alex', 'age' => 10],
    ['name' => 'Ivan', 'age' => 11],
    ['name' => 'John', 'age' => 12],
    ['name' => 'Mike', 'age' => 13],
];
$users[99] = ['name' => 'Nike', 'age' => 14];
//echo $users[3]['name'] . ' = ' . $users[3]['age'];

$sumAge = 0;
//$sumAge = $sumAge + $users[0]['age'];
//$sumAge = $sumAge + $users[1]['age'];
//$sumAge = $sumAge + $users[2]['age'];
//$sumAge = $sumAge + $users[3]['age'];


for ($i = 0; $i < 4; $i = $i + 1) {
    echo $users[$i]['name'] . '= ' . $users[$i]['age'] . "\n";
    $sumAge = $sumAge + $users[$i]['age'];
}

echo "Sum age: " . $sumAge . "\n";

// =======================================

for ($i = 3; $i >= 0; $i = $i - 1) {
    echo $users[$i]['name'] . '    = ' . $users[$i]['age'] . "\n";
    $sumAge = $sumAge + $users[$i]['age'];
}

echo "Sum age: " . $sumAge;





























//# Iterator
//$b = 100;
//for ($i = 3; $i <= 5; $i = $i + 1) {
//
//
//    $a = $b + $i;
//    echo '№' . $i . ' Privet! a = ' . $a . "\n";
//
//    for ($j = 0; $j < 2; $j = $j + 1) {
//        //....
//        echo "j = " . $j . "\n";
//    }
//
//}
