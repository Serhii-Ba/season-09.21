<?php

//$user = ['Alex', 10, 'Male'];
//$s = implode(', ', $user);
//echo 's: ' . $s;


// Alex, 10, Male, New York, 10000\n
// Ivan, 16, Male, New York, 10000\n
// Mike, 17, Male, Ohio,     10001\n

//$s = 'Alex, 10, Male, New York, 10000';
//$array = explode(', ', $s);

$s = file_get_contents('1.txt');

$a = explode("\n", $s);

$users = [];
foreach ($a as $v) {
    $user = explode(';', $v);
    $users[] = $user;
}

//var_dump($users);







//$s = file_get_contents('1.txt');
//echo $s;
//
//$s = $s . "\nIvanka";
//
//file_put_contents('1.txt', $s);

