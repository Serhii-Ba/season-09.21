<?php


$users = [
    ['name' => 'Alex1', 'age' => 10],
    ['name' => 'Alex2', 'age' => 11],
    ['name' => 'Alex3', 'age' => 12],
];

$a = 10;
$b = 'test string';
array_map(function($user) use ($a, $b) {

    echo 'a: ' . $a . ', b: ' . $b . "\n";
    echo '(array_map) Name: ' . $user['name'] . ', age: ' . $user['age'] . "\n";

}, $users);

function showUser($v) {
    echo 'Name: ' . $v['name'] . ', age: ' . $v['age'] . "\n";
}



















//foreach ($users as $v) {
//    showUser($v);
//}


//$showUser = function($name, $age) {
//    echo 'Name: ' . $name . ', age: ' . $age . "\n";
//};



//echo showUser('Alex', 19);
//echo $showUser('Alex', 19);
